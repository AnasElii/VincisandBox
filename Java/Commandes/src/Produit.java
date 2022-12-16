public class Produit {
    private static int id = 0;
    private String designation;
    private double prixUnit;
    private int qteStock;

    Produit(String designation, double prixUnit, int qteStock) {
        id++;
        this.designation = designation;
        this.prixUnit = prixUnit;
        this.qteStock = qteStock;
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
