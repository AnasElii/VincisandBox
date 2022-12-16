import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {
<<<<<<< HEAD
        System.out.println("Hello, World!");
        Scanner cin = new Scanner(System.in);

        int starNumber = cin.nextInt();
        int index = 1;
        int number = 1;

        while (starNumber >= index) {
            for (int i = index; i <= starNumber; i++) {
                System.out.print(" ");

            }
            for (int j = 0; j < number; j++)
                System.out.print("*");

            System.out.println("");
            number++;
            index++;
        }
=======
        Scanner cin = new Scanner(System.in);
        int number = cin.nextInt();
        int index = 1;
        while (number >= index) {
            if (index % 5 == 0) {
                System.out.println(index);

            } else
                System.out.print(index + " ");
            index++;
        }

>>>>>>> d7c7e7ef001c069d14fe68660e998699fdccb49b
    }
}
