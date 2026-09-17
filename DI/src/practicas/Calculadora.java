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
        int resultado = 0;

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

    private static void dividir()
    {
        int num1 = leerNumero("NÚMERO 1: ");
        int num2 = leerNumero("NÚMERO 2: ");

        int resultado = num1 / num2;

        System.out.printf("%d / %d = %d", num1, num2, resultado);
    }

    private static void multiplicar()
    {
        int num1 = leerNumero("NÚMERO 1: ");
        int num2 = leerNumero("NÚMERO 2: ");

        int resultado = 0;

        for (int i = 0; i < num2; i++)
            resultado += num1;

        System.out.printf("%d * %d = %d", num1, num2, resultado);
    }

    private static void restar()
    {
        int num1 = leerNumero("NÚMERO 1: ");
        int num2 = leerNumero("NÚMERO 2: ");
        int resultado = num1 - num2;

        System.out.printf("%d - %d = %d", num1, num2, resultado);
    }


    private static void sumar()
    {
        int num1 = leerNumero("NÚMERO 1: ");
        int num2 = leerNumero("NÚMERO 2: ");
        int resultado = num1 + num2;

        System.out.printf("%d + %d = %d", num1, num2, resultado);
    }

    private static int leerNumero(String mensaje)
    {
        System.out.print(mensaje);
        return scanner.nextInt();
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
