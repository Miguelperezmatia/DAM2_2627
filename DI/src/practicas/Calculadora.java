package practicas;

import java.util.Scanner;

public class Calculadora
{
    public static void main(String[] args)
    {
        mostrarOpciones();
        int opcion = leerOpcion();
        ejecutarOpcion(opcion);
    }

    static Scanner scanner = new Scanner(System.in);

    private static void ejecutarOpcion(int opcion)
    {
        if(opcion==1)
            sumar();
        else if(opcion==2)
            restar();
        else if(opcion==3)
            multiplicar();
        else if(opcion==4)
            dividir();
        else
            salir();
    }

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
