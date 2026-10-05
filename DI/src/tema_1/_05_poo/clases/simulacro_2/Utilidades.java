package tema_1._05_poo.clases.simulacro_2;

import java.util.Scanner;

public class Utils
{
    //  Atributo privado
    private static final Scanner SCANNER = new Scanner(System.in);

    public static int readInt(String message)
    {
        System.out.print(message);
        return SCANNER.nextInt();
    }

    public static String readString(String message)
    {
        System.out.print(message);
        return SCANNER.next();
    }
}
