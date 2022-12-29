import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {
        Scanner cin = new Scanner(System.in);
        int number = cin.nextInt();
        int index = 0;

        while (true) {
            int j = 0;
            while (true) {
                System.out.print("*");
                if (j >= index)
                    break;
                j++;
            }
            System.out.print("\n");
            if (index >= number)
                break;
            index++;
        }
    }
}
