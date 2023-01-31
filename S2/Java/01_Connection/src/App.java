import java.sql.*;

public class App {
    public static void main(String[] args) throws Exception {
        final String DB_URL = "jdbc:mysql://localhost:3306/voiture";
        final String UserName = "root";
        final String Password = "1234";

        try {
            Connection conn = DriverManager.getConnection(DB_URL, UserName, Password);
            System.out.println("Connected database successfully...");
            Statement stmt = conn.createStatement();
            String sql = "SELECT * FROM marque";
            ResultSet rs = stmt.executeQuery(sql);
            while (rs.next()) {
                int id = rs.getInt("id");
                String nom = rs.getString("nom");
                System.out.println("ID: " + id + ", Nom: " + nom);
            }
            rs.close();
            stmt.close();
            conn.close();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
