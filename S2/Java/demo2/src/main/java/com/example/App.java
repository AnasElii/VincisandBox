package com.example;

import java.io.InputStream;
import java.sql.*;
import java.util.ArrayList;
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

    public static void main(String[] args) {
        final String FilePath = "example/env.properties";
        final String DB_NAME;
        final String DB_URL;
        final String DB_USER;
        final String DB_PASSWORD;

        // Properties p = new Properties();
        // ClassLoader classLoader = Thread.currentThread().getContextClassLoader();
        // InputStream stream = classLoader.getResourceAsStream(FilePath);

        try {
            // p.load(stream);

            // DB_NAME = p.getProperty("dbname");
            // DB_URL = p.getProperty("url");
            // DB_USER = p.getProperty("user");
            // DB_PASSWORD = p.getProperty("password");

            Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/gestion_rh", "root", "1234");

            System.out.println("Connected database successfully...");
            String query = "Select * from service";

            Statement stmt = conn.createStatement();
            ResultSet rs = stmt.executeQuery(query);
            while (rs.next()) {
                System.out.println(rs.getString(1) + " " + rs.getString(2) + " " + rs.getString(3));
            }

            System.out.println("Query executed successfully...");

            stmt.close();
            conn.close();

        } catch (Exception e) {
            System.out.println(e.toString());
        }

        launch(args);
    }

    public static void executeQuery(String dB_URL, String userName, String password, String query, ArrayList properties,
            String string, String string2) {
    }
}
