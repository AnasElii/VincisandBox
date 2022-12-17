import java.util.ArrayList;
import java.text.DecimalFormat;
import java.time.LocalDate;
import java.util.Scanner;

public class App {

    private static Client addCLient(Scanner cin) {
        System.out.print("CLient name: ");
        String nom = cin.nextLine();

        System.out.print("CLient Adresse: ");
        String adresse = cin.nextLine();

        System.out.print("CLient Tel: ");
        String tel = cin.nextLine();

        Client c = new Client(nom, adresse, tel);
        return c;
    }

    private static LigneCommande addLineCommande(Scanner cin, Produit produit, Commande commande) {
        System.out.print("Quantity: ");
        int qteCommande = cin.nextInt();
        cin.nextLine();

        System.out.print("Reduction: ");
        int reduction = cin.nextInt();
        cin.nextLine();

        LigneCommande l = new LigneCommande(produit, commande, qteCommande, reduction);
        return l;
    }

    private static Produit addProduct(Scanner cin) {
        System.out.print("Product Designation: ");
        String designation = cin.nextLine();

        System.out.print("Product Prix: ");
        double prix = cin.nextDouble();

        System.out.print("Product Quantity Stock: ");
        int qteStock = cin.nextInt();
        cin.nextLine();

        Produit p = new Produit(designation, prix, qteStock);
        return p;
    }

    private static void DisplayClient(ArrayList<Client> cList) {
        System.out.println("|------------------------------------|");
        System.out.println("| ID | Nom | Adresse | Tel |");
        for (Client client : cList) {
            System.out.println("|------------------------------------|");
            System.out.println("| " + client.GetID() + " | " + client.GetNom() + " | " + client.GetAdresse()
                    + " | " + client.GetTel() + " |");
        }
        System.out.println("|------------------------------------|");
    }

    private static void DisplayProductList(ArrayList<Produit> pList) {
        System.out.println("|------------------------------------|");
        System.out.println("| ID | Designation | Prix | qteStock |");
        for (Produit produit : pList) {
            System.out.println("|------------------------------------|");
            System.out.println("| " + produit.GetID() + " | " + produit.GetDesignation() + " | " + produit.GetPrixUnit()
                    + " | " + produit.GetQteStok() + " |");
        }
        System.out.println("|------------------------------------|");
    }

    private static void DisplayCommande(Commande commande, Client client, ArrayList<LigneCommande> lCommandes) {
        System.out.println("BON DE COMMANDE N'" + commande.GetID());
        System.out.println("Date: " + commande.GetDate());
        System.out.println("Client: " + client.GetNom());
        System.out.println("ARTICLES: ");
        System.out.println("DESIGNATION           QTE  P.U.  REDUCT  TOTAL");
        double total = 0;
        for (LigneCommande ligneCommande : lCommandes) {
            if (ligneCommande.GetCommandeID() == commande.GetID()) {
                Produit produit = ligneCommande.GetProduit();
                total = total + ligneCommande.calculTotalProduit();
                System.out.println("* " + produit.GetDesignation() + " | " + ligneCommande.GetQteCommande() + " | "
                        + new DecimalFormat("######,######").format(produit.GetPrixUnit()) + " | "
                        + ligneCommande.GetReduction() + " | "
                        + new DecimalFormat("######,######").format(ligneCommande.calculTotalProduit()));
            }
        }
        System.out.println("TOTAL: " + new DecimalFormat("######,######").format(total));
        System.out.println("TOTAL TTC: " + new DecimalFormat("######,######").format((total + (total * 0.2))));
    }

    public static void main(String[] args) throws Exception {
        ArrayList<Client> clientList = new ArrayList<Client>();
        ArrayList<Produit> produitsList = new ArrayList<Produit>();
        ArrayList<Commande> commandeList = new ArrayList<Commande>();
        ArrayList<LigneCommande> ligneCommandeList = new ArrayList<LigneCommande>();
        Scanner cin = new Scanner(System.in);

        // Add New Client
        System.out.println("======== Add Client ========");
        clientList.add(addCLient(cin));

        // Add New Products
        do {
            System.out.println("======== Add Products ========");
            produitsList.add(addProduct(cin));

            System.out.print("Enter another product y/n: ");
            String str = cin.nextLine();
            if (str.equals("n") || str.equals("N")) {
                System.out.println("Beaking Time");
                break;
            }
        } while (true);

        // Display Product List
        DisplayProductList(produitsList);

        System.out.println("======== Add Commande ========");

        // Add new client to commande
        System.out.println("Select a CLient");
        DisplayClient(clientList);
        System.out.print("Client ID: ");
        int cID = cin.nextInt();
        Client client = clientList.get(cID - 1);

        // Create New Commande
        Commande commande = new Commande(LocalDate.now(), false, false, client);
        commandeList.add(commande);

        // Add LigneCommande to Commande
        do {
            // Add new produit to ligne commande
            System.out.println("Select a Produit");
            DisplayProductList(produitsList);
            System.out.print("Produt ID: ");
            int pID = cin.nextInt();
            Produit produit = produitsList.get(pID - 1);

            // Add Ligne Commande to commande list
            ligneCommandeList.add(addLineCommande(cin, produit, commande));

            // Update Product Stock
            produit.SetQteStock(
                    produit.GetQteStok() - ligneCommandeList.get(ligneCommandeList.size() -
                            1).GetQteCommande());

            System.out.println("Add another product to Commande y/n");
            String str = cin.nextLine();
            if (str.equals("n") || str.equals("N")) {
                break;
            }
        } while (true);

        // Display Commande
        DisplayCommande(commande, client, ligneCommandeList);
    }

}
