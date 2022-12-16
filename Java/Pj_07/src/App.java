import java.util.Scanner;

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
    }
}
