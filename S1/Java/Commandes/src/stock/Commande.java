package stock;

import java.time.LocalDate;
import java.util.ArrayList;

public class Commande {
    private int id;
    private LocalDate date;
    private boolean type = false; // 1 = express | 0 = normale
    private boolean payee;
    private Client client;

    private static int staticID = 0;

    public Commande() {
    }

    Commande(LocalDate date, boolean type, boolean payee, Client client) {
        this.id = staticID + 1;
        this.date = date;
        this.type = type;
        this.payee = payee;
        this.client = client;
    }

    public int GetID() {
        return id;
    }

    public LocalDate GetDate() {
        return date;
    }

    public void SetDate(LocalDate date) {
        this.date = date;
    }

    public boolean GetType() {
        return type;
    }

    public void SetType(boolean type) {
        this.type = type;
    }

    public boolean GetPyee() {
        return payee;
    }

    public void SetPayee(boolean payee) {
        this.payee = payee;
    }

    public Client GetClient() {
        return client;
    }

    public void SetClient(Client client) {
        this.client = client;
    }

    public void SetPayee(Client client) {
        this.client = client;
    }

    public double calculTotalComande(ArrayList<LigneCommande> ligneCommandeList) {
        double totale = 0;
        for (LigneCommande ligneCommande : ligneCommandeList) {
            totale = totale + ligneCommande.calculTotalProduit();
        }
        return totale;
    }
}
