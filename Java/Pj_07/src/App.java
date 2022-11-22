import java.util.Scanner;
import java.util.concurrent.CountDownLatch;

public class App {
    public static void main(String[] args) throws Exception {
        System.out.println("Hello, World!");
        Scanner cin = new Scanner(System.in);
        int[] T_INTIER = new int[5];
        int index = 0;

        while (index < 5) {
            System.out.print("Enter 1th number: ");
            T_INTIER[index] = cin.nextInt();
            index++;
            if(index < 5)
                index = 0;
            for (int i = 0; i < 4; i++) {
                if (T_INTIER[i] < T_INTIER[i + 1]) {
                    int number = T_INTIER[i + 1];
                    T_INTIER[i + 1] = T_INTIER[i];
                    T_INTIER[i] = number;
                }
            }
        }

        while (index < 5) {

            index++;
        }

        for (int i : T_INTIER)
            System.out.println(i);
    }
}
