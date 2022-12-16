import java.util.ArrayList;
import java.time.LocalDate;
import java.util.Scanner;

public class App {

    private static Client addCLient(Scanner cin) {
        String nom = cin.nextLine();
        String adresse = cin.nextLine();
        String tel = cin.nextLine();
        Client c = new Client(nom, adresse, tel);
        return c;
    }

    private static Produit addProduct(Scanner cin) {
        String designation = cin.nextLine();
        double prix = cin.nextDouble();
        int qteStock = cin.nextInt();
        Produit p = new Produit(designation, prix, qteStock);
        return p;
    }

    public static void main(String[] args) throws Exception {
        ArrayList<Client> clientList = new ArrayList<Client>();
        ArrayList<Produit> produitsList = new ArrayList<Produit>();
        ArrayList<LigneCommande> ligneCommandeList = new ArrayList<LigneCommande>();
        Scanner cin = new Scanner(System.in);

        System.out.println("Enter User name: ");
        clientList.add(addCLient(cin));

        Client client_1 = new Client("Mouad", "Hey Lfarah", "0610957256");
        clientList.add(client_1);

        do {
            System.out.println("Enter Produit name: ");
            produitsList.add(addProduct(cin));

            System.out.println("Enter another product y/n");
        } while (true);

        Produit produit_1 = new Produit("Lenovo Legion 5 2019", 10000, 10);
        produitsList.add(produit_1);
        Produit produit_2 = new Produit("Hp EliteBook", 8500, 15);
        produitsList.add(produit_2);

        Commande commande = new Commande(LocalDate.now(), false, false, client_0);

        LigneCommande lingeCmd_0 = new LigneCommande(produitsList.get(0), commande, 3, 5);
        ligneCommandeList.add(lingeCmd_0);
        LigneCommande lingeCmd_1 = new LigneCommande(produitsList.get(1), commande, 5, 15);
        ligneCommandeList.add(lingeCmd_1);
    }
}
