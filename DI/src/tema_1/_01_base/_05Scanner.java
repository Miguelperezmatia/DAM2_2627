package tema_1._01_base;
import java.util.Scanner;

public class _05Scanner
{
    public static void main(String[] args)
    {
        Scanner teclado = new Scanner(System.in);

        String password = "hola";

        System.out.print("INTRODUCE LA CONTRASEÑA: ");
        String userPassword = teclado.nextLine();

        if(password.equals(userPassword))
            System.out.println("Acceso concedido");
        else
            System.out.println("Datos incorrectos");
    }
}
