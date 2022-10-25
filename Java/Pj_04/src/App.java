import java.util.Scanner;

public class App {
    static String calcSalaire(double salair, int enfNumber, int pNumber) {
        if (enfNumber >= 1) {
            return (salair <= 5000) && enfNumber >= 5 ? "Participation de  " + 50 + "%"
                    : "Participation de  " + (pNumber + 1) + "%";
        }
        return (salair <= 5000) ? "Participation de  " + (pNumber + 10) + "%"
                : "Participation de  " + pNumber + "%";

    }

    public static void main(String[] args) throws Exception {

        Scanner cin = new Scanner(System.in);

        System.out.println("=======//Menu//=======");
        System.out.println("Celibataire__________01");
        System.out.println("Marie________________02");
        System.out.println("Marie aver enfants___03");
        System.out.println("Exit_________________04");
        System.out.print("le choice: ");
        int choice = cin.nextInt();

        System.out.print("Enter le salaire: ");
        double salaire = cin.nextDouble();

        switch (choice) {
            case 1:
                calcSalaire(salaire, 0, 20);
                break;
            case 2:
                calcSalaire(salaire, 0, 25);
                break;
            case 3:
                System.out.println("Enfants nomber: ");
                int number = cin.nextInt();
                calcSalaire(salaire, number, 0);
                break;
            case 4:
                System.exit(1);
                break;
            default:
                System.out.println("Error");
                break;
        }
    }
}
