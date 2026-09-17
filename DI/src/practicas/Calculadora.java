package practicas;

import java.util.Scanner;

public class Calculadora
{
    public static void main(String[] args)
    {
        mostrarOpciones();
        int opcion = leerOpcion();
    }

    static Scanner scanner = new Scanner(System.in);



    private static int leerOpcion()
    {
        System.out.print("Elige una opción: ");
        return scanner.nextInt();
    }

    private static void mostrarOpciones()
    {
        System.out.println("""
                OPCIÓN  ACCIÓN
                
                1       SUMAR
                2       RESTAR
                3       MULTIPLICAR
                4       DIVIDIR
                otra    SALIR
                """);
    }
}
