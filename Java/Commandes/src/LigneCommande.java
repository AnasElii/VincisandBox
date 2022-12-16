public class LigneCommande {
    Produit produit;
    Commande commande;
    int qteCommande;
    float reduction;

    LigneCommande(Produit produit, Commande commande, int qteCommande, float reduction) {
        this.produit = produit;
        this.commande = commande;
        this.qteCommande = qteCommande;
        this.reduction = reduction;
    }

    double calculTotalProduit() {
        double tolalProduit = qteCommande * (produit.GetPrixUnit() - ((reduction / 100) * produit.GetPrixUnit()));
        System.out.println("Total Produit " + produit.GetDesignation() + ": " + tolalProduit);
        return tolalProduit;
    }
}
