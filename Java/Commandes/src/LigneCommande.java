public class LigneCommande {
    private Produit produit;
    private Commande commande;
    private int qteCommande;
    private int reduction = 0;

    LigneCommande(Produit produit, Commande commande, int qteCommande, int reduction) {
        this.produit = produit;
        this.commande = commande;
        this.qteCommande = qteCommande;
        this.reduction = reduction;
    }

    int GetCommandeID() {
        return commande.GetID();
    }

    Commande GetCommande() {
        return commande;
    }

    Produit GetProduit() {
        return produit;
    }

    public int GetQteCommande() {
        return qteCommande;
    }

    public int GetReduction() {
        return reduction;
    }

    double calculTotalProduit() {
        double tolalProduit = qteCommande * (produit.GetPrixUnit() - ((reduction / 100) * produit.GetPrixUnit()));
        return tolalProduit;
    }
}
