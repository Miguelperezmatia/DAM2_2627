import java.util.Scanner;

public class Utilidades
{
    private static final Scanner SCANNER = new Scanner(System.in);

    public static String readString(String mensaje)
    {
        System.out.print(mensaje);
        return SCANNER.next();
    }

    public static int readInt(String mensaje)
    {
        System.out.print(mensaje);
        return SCANNER.nextInt();
    }
}
