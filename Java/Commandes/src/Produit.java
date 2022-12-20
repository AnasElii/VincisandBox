public class Produit {
    private int id;
    private String designation;
    private double prixUnit;
    private int qteStock;

    private static int staticID = 0;

    Produit(String designation, double prixUnit, int qteStock) {
        this.id = staticID + 1;
        this.designation = designation;
        this.prixUnit = prixUnit;
        this.qteStock = qteStock;
        staticID++;
    }

    int GetID() {
        return id;
    }

    String GetDesignation() {
        return designation;
    }

    void SetDesignation(String designation) {
        this.designation = designation;
    }

    double GetPrixUnit() {
        return prixUnit;
    }

    void SetPrixUnit(double prixUnit) {
        this.prixUnit = prixUnit;
    }

    int GetQteStok() {
        return qteStock;
    }

    void SetQteStock(int qteStock) {
        this.qteStock = qteStock;
    }

}
