import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {
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
    }
}
