import java.util.ArrayList;
import java.util.Scanner;

public class App {

    public static void Display(Product product) {
        System.out.println("==" + "[" + product.GetID() + "]");
        // System.out.println("Product ID: " + product.GetID());
        System.out.println("Product Name: " + product.GetName());
        System.out.println("Product Price: " + product.GetPrice());
        System.out.println("Product Quantity: " + product.GetQuantity());

    }

    public static void main(String[] args) throws Exception {
        Scanner cin = new Scanner(System.in);
        ArrayList<Product> pList = new ArrayList<Product>();

        while (true) {
            Product product = new Product();

            System.out.print("Enter Product Name: ");
            product.SetName(cin.nextLine());
            System.out.print("Enter Product Price: ");
            product.SetPrice(cin.nextDouble());
            System.out.print("Enter Product Quantity: ");
            product.SetQuantity(cin.nextShort());

            pList.add(product);
            cin.nextLine();
            System.out.print("Enter Another Product(y/n): ");
            char choice = cin.nextLine().charAt(0);
            // System.out.println("Char: " + choice);
            if (choice != 'y' && choice != 'Y') {
                cin.close();
                break;
            }
        }

        System.out.println("=============// Product List");
        for (int i = 0; i < pList.size(); i++)
            Display(pList.get(i));

        // Calculation de 10% de Product 3
        double p3Price = pList.get(2).GetPrice();
        pList.get(2).SetPrice((p3Price * .9));
        // System.out.println("Product 3 Price: " + pList.get(2).GetPrice());

        // Calculation Total
        double total = 0;
        for (Product product : pList) {
            total += product.GetPrice() * product.GetQuantity();
        }
        double tva = total * .2;

        System.out.println("=============// Total Price");
        System.out.println("Total: " + total);
        System.out.println("TTC: " + (total + tva));

    }
}

class Product {
    private static int ID;
    private int pID;
    private String name;
    private double price;
    private int quantity;

    public Product() {
        pID = ID;
        ID++;
    }

    public Product(String name, double price, int quantity) {
        pID = ID;
        this.name = name;
        this.price = price;
        this.quantity = quantity;
        ID++;
    }

    void SetName(String name) {
        this.name = name;
    }

    String GetName() {
        return name;
    }

    void SetPrice(double price) {
        this.price = price;
    }

    double GetPrice() {
        return price;
    }

    void SetQuantity(int quantity) {
        this.quantity = quantity;
    }

    int GetQuantity() {
        return quantity;
    }

    int GetID() {
        return pID;
    }

}