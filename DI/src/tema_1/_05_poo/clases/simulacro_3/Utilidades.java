package tema_1._05_poo.clases.simulacro_3;

import java.util.Scanner;

public class Utilidades
{
    private static final Scanner SCANNER = new Scanner(System.in);

    public static String readString(String message)
    {
        System.out.print(message);
        return SCANNER.next();
    }

    public static int readInt(String message)
    {
        System.out.print(message);
        return SCANNER.nextInt();
    }
}
