import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {
        Scanner sc = new Scanner(System.in);
        System.out.println("Tapez le jour, le moi et l'annee de naissance");
        int jour = sc.nextInt();
        int moi = sc.nextInt();
        int annee = sc.nextInt();
        sc.nextLine();
        System.out.println("Tapez le nome");
        String nome = sc.nextLine();

        System.out.println("BonJour M." + nome + " Votre date de naissance et: " + jour + "/" + moi + "/" + annee);
    }
}
