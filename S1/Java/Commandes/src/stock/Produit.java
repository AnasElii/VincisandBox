package stock;

public class Produit {
    private int id;
    private String designation;
    private double prixUnit;
    private int qteStock;

    private static int staticID = 0;

    public Produit() {
    }

    Produit(String designation, double prixUnit, int qteStock) {
        this.id = staticID + 1;
        this.designation = designation;
        this.prixUnit = prixUnit;
        this.qteStock = qteStock;
        staticID++;
    }

    public int GetID() {
        return id;
    }

    public String GetDesignation() {
        return designation;
    }

    public void SetDesignation(String designation) {
        this.designation = designation;
    }

    public double GetPrixUnit() {
        return prixUnit;
    }

    public void SetPrixUnit(double prixUnit) {
        this.prixUnit = prixUnit;
    }

    public int GetQteStok() {
        return qteStock;
    }

    public void SetQteStock(int qteStock) {
        this.qteStock = qteStock;
    }

}
