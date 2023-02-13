import java.util.Properties;
import java.io.InputStream;

public class GestionEmployee {

    public void addEmployee(String nom, String prenom, String adresse, String naissance, String tel, String salaire,
            String service) {

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

            String query = "INSERT INTO employe (NOM, PRESON, ADRESSE, NAISSANCE, TEL, SALAIRE, SERVICE) VALUES ('"
                    + nom + "', '" + prenom + "', '" + adresse + "', '" + naissance + "', '" + tel + "', '" + salaire
                    + "', '" + service + "')";

            App.executeQuery(DB_URL, UserName, Password, query, "/gestion_rh", "Employee Added");

        } catch (Exception e) {
            System.out.println(e.toString());
        }

    }
}
