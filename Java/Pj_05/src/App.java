import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {
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

    }
}
