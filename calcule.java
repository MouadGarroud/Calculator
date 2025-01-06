//Mouad Garroud
import java.util.Scanner;
public class calcule {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        try {
            System.out.print("First: ");
            int i = sc.nextInt();
            System.out.print("Choose (1 +) (2 *) (3 /) (4 -) (5 sqrt) (6 abs) (7 %) (8 compare) (9 exp) (10 <<) (11 >>) (12 &) (13 |): ");
            int x = sc.nextInt();
            double sql = Math.sqrt(i);
            if (x == 1) {
                System.out.print("Second: ");
                int o = sc.nextInt();
                System.out.println("The sum: " + (i + o));
            } else if (x == 2) {
                System.out.print("Second: ");
                int o = sc.nextInt();
                System.out.println("The product: " + (i * o));
            } else if (x == 3) {
                System.out.print("Second: ");
                int o = sc.nextInt();
                if (o == 0) {
                    System.out.println("Not possible because the second number " + o + " is zero");
                } else {
                    System.out.println("The division: " + (i / o));
                }
            } else if (x == 4) {
                System.out.print("Second: ");
                int o = sc.nextInt();
                System.out.println("The difference: " + (i - o));
            } else if (x == 5) {
                if (i < 0) {
                    System.out.println(i + " is a negative number, cannot compute square root.");
                } else {
                    System.out.println("The square root of " + i + " is " + Math.sqrt(i));
                }
            } else if (x == 6) {
                System.out.println("The absolute value of " + i + " is " + Math.abs(i));
            } else if (x == 7) {
                System.out.print("Second: ");
                int o = sc.nextInt();
                if (o <= 0) {
                    System.out.println("The second number should be positive");
                } else {
                    System.out.println("The modulo is: " + (i % o));
                }
            } else if (x == 8) {
                System.out.print("Second: ");
                int o = sc.nextInt();
                if (i < o) {
                    System.out.println("The second number " + o + " is bigger than the first number " + i);
                } else if (i > o) {
                    System.out.println("The first number " + i + " is bigger than the second number " + o);
                } else {
                    System.out.println("The two numbers are equal: " + i + " = " + o);
                }
            } else if (x == 9) {
                System.out.print("Exponent: ");
                int o = sc.nextInt();
                System.out.println("The result of " + i + " raised to the power of " + o + " is " + Math.pow(i, o));
            } else if (x == 10) {
                System.out.print("Second: ");
                int o = sc.nextInt();
                System.out.println("The result of left shift: " + (i << o));
            } else if (x == 11) {
                System.out.print("Second: ");
                int o = sc.nextInt();
                System.out.println("The result of right shift: " + (i >> o));
            } else if (x == 12) {
                System.out.print("Second: ");
                int o = sc.nextInt();
                System.out.println("The result of bitwise AND: " + (i & o));
            } else if (x == 13) {
                System.out.print("Second: ");
                int o = sc.nextInt();
                System.out.println("The result of bitwise OR: " + (i | o));
            } else {
                System.out.println("Invalid operation");
            }
        } finally {
            sc.close();
        }
    }
}