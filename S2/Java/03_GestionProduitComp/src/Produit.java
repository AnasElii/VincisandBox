public class Produit {
    private int ID;
    private String nom;
    private double prixUnit;
    private int qteStock;

    private static int number = 0;

    Produit(String nom, double prixUnit, int qteStock) {
        this.ID = number;
        this.nom = nom;
        this.prixUnit = prixUnit;
        this.qteStock = qteStock;
        number++;
    }

    public Double getPrixUnit() {
        return prixUnit;
    }

    public Integer getQteStock() {
        return qteStock;
    }

}