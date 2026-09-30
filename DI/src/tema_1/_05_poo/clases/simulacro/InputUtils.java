package tema_1._05_poo.clases.simulacro;

import java.util.Scanner;

public class InputUtils
{
    public static final Scanner SCANNER = new Scanner(System.in);

    public static String readText(String message)
    {
        System.out.print(message);
        return SCANNER.nextLine();
    }

    public static int readNumber(String message)
    {
        System.out.print(message);
        int number = SCANNER.nextInt();
        SCANNER.nextLine();
        return number;
    }
}
