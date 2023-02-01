package stock;

public class LigneCommande {
    private Produit produit;
    private Commande commande;
    private int qteCommande;
    private int reduction = 0;

    public LigneCommande() {
    }

    LigneCommande(Produit produit, Commande commande, int qteCommande, int reduction) {
        this.produit = produit;
        this.commande = commande;
        this.qteCommande = qteCommande;
        this.reduction = reduction;
    }

    public int GetCommandeID() {
        return commande.GetID();
    }

    public void SetCommande(Commande commande) {
        this.commande = commande;
    }

    public Commande GetCommande() {
        return commande;
    }

    public void SetProduit(Produit produit) {
        this.produit = produit;
    }

    public Produit GetProduit() {
        return produit;
    }

    public void SetQteCommande(int qteCommande) {
        this.qteCommande = qteCommande;
    }

    public int GetQteCommande() {
        return qteCommande;
    }

    public void SetReduction(int reduction) {
        this.reduction = reduction;
    }

    public int GetReduction() {
        return reduction;
    }

    public double calculTotalProduit() {
        double tolalProduit = qteCommande * (produit.GetPrixUnit() - ((reduction / 100) * produit.GetPrixUnit()));
        return tolalProduit;
    }
}
