import java.util.Scanner;

public class Utils
{
    private final static Scanner SCANNER = new Scanner(System.in);

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
