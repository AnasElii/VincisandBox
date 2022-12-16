import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {
        Scanner cin = new Scanner(System.in);
        int number = cin.nextInt();
        int index = 1;
        char ch = (char) 219;
        while (number >= index) {

            int i = 1;
            while (i < index) {
                System.out.print(ch + "");
                i++;
            }

            System.out.println(index);

            index++;
        }

    }
}
