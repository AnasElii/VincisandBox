import java.util.ArrayList;
import java.util.Properties;
import java.io.InputStream;

public class GestionEmployee {

    public void addEmployee(ArrayList properties) {

        final String FilePath = "env.properties";
        final String DB_URL;
        final String UserName;
        final String Password;

        try {

            Properties p = new Properties();
            ClassLoader classLoader = Thread.currentThread().getContextClassLoader();
            InputStream stream = classLoader.getResourceAsStream(FilePath);
            p.load(stream);

            DB_URL = p.getProperty("url");
            UserName = p.getProperty("user");
            Password = p.getProperty("password");

            String query = "INSERT INTO employe (NOM, PRESON, TEL, ADRESSE, SALAIRE, NAISSANCE, SERVICE)" +
                    "VALUES(?, ?, ?, ?, ?, ?, ?)";
            App.executeQuery(DB_URL, UserName, Password, query, properties, "/gestion_rh", "Employee Added");

        } catch (Exception e) {
            System.out.println(e.toString());
        }

    }
}
