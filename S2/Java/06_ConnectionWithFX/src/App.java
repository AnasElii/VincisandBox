import java.io.InputStream;
import java.sql.*;
import java.util.Properties;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

public class App extends Application {

    @Override
    public void start(Stage primaryStage) throws Exception {
        Parent root = FXMLLoader.load(getClass().getResource("EmployeeScene.fxml"));
        Scene scene = new Scene(root);

        primaryStage.setTitle("Gestion RH");
        primaryStage.setScene(scene);
        primaryStage.show();
    }

    public static void executeQuery(String DB_URL, String Username, String Password, String query, String DB,
            String message) {
        try {
            Connection conn = DriverManager.getConnection(DB_URL + DB, Username, Password);
            // System.out.println("Connected database successfully...");
            Statement stmt = conn.createStatement();
            stmt.executeUpdate(query);
            System.out.println(message);
            stmt.close();
            conn.close();
        } catch (Exception e) {
            System.out.println(e.toString());
        }
    }

    public static void main(String[] args) throws Exception {
        final String FilePath = "env.properties";
        final String DB_URL;
        final String UserName;
        final String Password;

        Properties p = new Properties();
        ClassLoader classLoader = Thread.currentThread().getContextClassLoader();
        InputStream stream = classLoader.getResourceAsStream(FilePath);
        p.load(stream);

        DB_URL = p.getProperty("url");
        UserName = p.getProperty("user");
        Password = p.getProperty("password");

        // Create Database
        executeQuery(DB_URL, UserName, Password, "CREATE DATABASE gestion_rh", "", "Table \" gestion_rh \" Database");

        // Create Tables
        executeQuery(DB_URL, UserName, Password, "CREATE TABLE service(" +
                "ID INT(5) Primary Key AUTO_INCREMENT NOT NULL," +
                "NOM VARCHAR(50) NOT NULL," +
                "Date_Creation DATE," +
                "PARENT INT(5)," +
                "FOREIGN KEY (PARENT) REFERENCES service(ID))", "/gestion_rh", "Table \"service\" Created");
        executeQuery(DB_URL, UserName, Password, "CREATE TABLE employe(" +
                "ID INT(5) Primary Key AUTO_INCREMENT NOT NULL," +
                "NOM VARCHAR(50) NOT NULL," +
                "PRESON VARCHAR(50) NOT NULL," +
                "TEL VARCHAR(50) NOT NULL," +
                "ADRESSE VARCHAR(100)," +
                "SALAIRE DECIMAL(7)," +
                "NAISSANCE DATE," +
                "SERVICE INT(5), " +
                "CONSTRAINT service FOREIGN KEY (SERVICE)" +
                "REFERENCES SERVICE(ID) ON UPDATE CASCADE)", "/gestion_rh",
                "Table \"employee\" Created");

        // Insert Into Tables
        executeQuery(DB_URL, UserName, Password, "INSERT INTO SERVICE(ID, NOM, DATE_CREATION, PARENT) " +
                "VALUES(NULL, 'SERVICE COMPTABILITE', '2012-10-15', NULL)", "/gestion_rh",
                "data Inserted into \"service\"");

        // executeQuery(DB_URL, UserName, Password, "INSERT INTO EMPLOYE " +
        // "VALUES(NULL, 'Anas', 'Elouraini', '0610957256', 'Hey Dalia',20000,
        // '1996-01-14', null)", "/gestion_rh",
        // "data Inserted into \"employe\"");

        // while (rs.next()) {
        // int id = rs.getInt("id");
        // String nom = rs.getString("nom");
        // System.out.println("ID: " + id + ", Nom: " + nom);
        // }
        launch(args);

    }
}
