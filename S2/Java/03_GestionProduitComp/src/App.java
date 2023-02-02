import java.util.ArrayList;

public class App {

    ArrayList<Produit> produitList = new ArrayList<>();

    Produit p1 = new Produit("Tea", 12, 50);
    Produit p2 = new Produit("Coffe", 16, 20);
    Produit p3 = new Produit("Soda", 14, 80);

    public static void main(String[] args) throws Exception {
        System.out.println("Hello, World!");
    }
}
