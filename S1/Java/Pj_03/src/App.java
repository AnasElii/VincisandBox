import java.util.Scanner;

public class App {

    static double Calc(int nbr_h, double tarif_h) {
        double total = 0, total2 = 0;
        int nbr_ht = 172;

        if (nbr_h > nbr_ht) {
            int nbr = nbr_h - nbr_ht;
            total = nbr_ht * tarif_h;

            nbr = nbr_h - nbr_ht;
            total2 = (nbr * (tarif_h * 1.5));
        } else
            total2 = (nbr_h * tarif_h);

        return total += total2;
    }

    public static void main(String[] args) throws Exception {

        int nbr_h = 0;
        double tarif_h = 0;
        double tBrut = 0, tNet = 0;
        Scanner cin = new Scanner(System.in);

        System.out.print("Enter nomber hour de travail: ");
        nbr_h = cin.nextInt();
        System.out.print("Enter tarif per hour: ");
        tarif_h = cin.nextDouble();

        tBrut = Calc(nbr_h, tarif_h);
        tNet = (tBrut >= 7000) ? tBrut * .7 : tBrut * .8;

        System.out.println("Salaire Brut: " + tBrut);
        System.out.println("Salaire Net: " + tNet);

    }
}
