try { 

	Class.forName("com.mysql.jdbc.Driver"); 

	String adress_ip_mysql = "localhost", numéro_du_port = "3306", user = "root", pass = "", nom_base = "gestion_rh"; 
	String connectionString = "jdbc:mysql://" + adress_ip_mysql + ":" + numéro_du_port + "/" + nom_base; 
	String sql = "DELETE FROM SERVICE"; 

	Connection c = DriverManager.getConnection(connectionString, user, pass); 
	Statement stm = c.createStatement(); 
	System.out.println("resultat (nombre de lignes) : " + stm.executeUpdate(sql)); 
} 
catch (ClassNotFoundException ex) { 
	System.err.println(ex.getMessage()); 
} 
catch (SQLException ex) {
	System.err.println(ex.getMessage()); 
}

try { 

	Class.forName("com.mysql.jdbc.Driver"); 

	String adress_ip_mysql = "localhost", numéro_du_port = "3306", user = "root", pass = "", nom_base = "avocat"; 
	String connectionString = "jdbc:mysql://" + adress_ip_mysql + ":" + numéro_du_port + "/" + nom_base; 
	String sql = "INSERT INTO CLIENT VALUES(?, ?, ?, ?, ?, NULL)"; 

	Connection c = DriverManager.getConnection(connectionString, user, pass); 
	PrepareStatment pr = c.prepareStatment(sql);
	pr.setInt(1, 1);
	pr.setSting(2, "Elouraini");
	pr.setSting(3, "Anas");
	

	System.out.println("resultat (nombre de lignes) : " + pr.executeUpdate()); 

} catch (ClassNotFoundException ex) {

	System.err.println(ex.getMessage()); 

} catch (SQLException ex) { 

	System.err.println(ex.getMessage()); 

}