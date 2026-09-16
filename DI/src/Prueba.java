import java.util.Scanner;

public class Prueba
{
    public static void main(String[] args)
    {
        int num1 = leerNumero("NÚMERO 1: ");
        int num2 = leerNumero("NÚMERO 2: ");
        System.out.println(num1 + num2);
    }

    static Scanner teclado = new Scanner(System.in);

    private static int leerNumero(String mensaje)
    {
        System.out.print(mensaje);
        return teclado.nextInt();
    }
}
