package practicas.BrawlStars;
import java.util.Scanner;

//  Clase con métodos útiles y que se usan repetidamente
public class Utils
{
    // Objeto estático y constante para leer datos
    private static final Scanner scanner = new Scanner(System.in);

    //  Leer un String
    public static String readString(String message)
    {
        System.out.print(message);
        return scanner.nextLine();
    }

    //  Leer un int
    public static int readInt(String message)
    {
        System.out.print(message);
        int data = scanner.nextInt();
        scanner.nextLine();             // Limpia el salto de línea que queda
        return data;
    }
}