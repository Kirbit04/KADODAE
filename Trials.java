import java.util.Scanner;

public class Trials {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        System.out.print("Enter your first name: ");
        String fname = scan.next();
        System.out.println("Hello, " + fname + "!");
    }
}