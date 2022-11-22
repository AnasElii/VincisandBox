import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {
        System.out.println("Saisir le nomber d'eleves");
        Scanner cin = new Scanner(System.in);

        int elevesNomber = cin.nextInt();
        double[] elevesNote = new double[elevesNomber];
        int index = 0;
        int moyenne = 10;
        int elevesMoyenne = 0;

        while (index < elevesNote.length) {
            System.out.print("Saisir la note d'examen: ");
            elevesNote[index] = cin.nextDouble();
            index++;
        }

        for (int i = 0; i < elevesNomber - 1; i++)
            if (elevesNote[i] >= moyenne)
                elevesMoyenne++;

        System.out.println("Le nomber d'eleves qui on le moiyenne: " + elevesMoyenne);
    }
}
