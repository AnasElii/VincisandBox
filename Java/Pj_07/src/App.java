import java.util.Scanner;
<<<<<<< HEAD
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
=======

public class App {
    public static void main(String[] args) throws Exception {
        Scanner cin = new Scanner(System.in);
        int number = cin.nextInt();
        int index = 1;
        int shapeNum = number / 4;
        int i = 0;

        while (true) {
            if (i == shapeNum) {
                System.out.println("*");
                break;
            } else {
                System.out.print("*");
            }
            i++;
        }
        i = 0;
        while (i <= shapeNum) {
            System.out.print("*");
            int j = 0;
            while (true) {
                System.out.print(" ");
                if (j >= (shapeNum - 2))
                    break;
                j++;
            }
            System.out.println("*");
            i++;
        }

        i = 0;
        while (true) {
            if (i == shapeNum) {
                System.out.println("*");
                break;
            } else {
                System.out.print("*");
            }
            i++;
        }
>>>>>>> d7c7e7ef001c069d14fe68660e998699fdccb49b
    }
}
