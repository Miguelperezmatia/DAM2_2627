package practicas;

import java.util.Scanner;

public class Calculadora
{
    public static void main(String[] args)
    {
        while(true)
        {
            mostrarOpciones();
            int opcion = leerOpcion();
            ejecutarOpcion(opcion);
            if(opcion==5)
                break;
        }
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

    private static void salir()
    {
        System.out.println("FÍN DEL PROGRAMA");
    }

    private static void dividir()
    {
        int num1 = leerNumero("NÚMERO 1: ");
        int num2 = leerNumero("NÚMERO 2: ");

        int resultado = num1 / num2;

        mostrarResultado(num1, num2, resultado, '/');
    }

    private static void multiplicar()
    {
        int num1 = leerNumero("NÚMERO 1: ");
        int num2 = leerNumero("NÚMERO 2: ");

        int resultado = 0;

        for (int i = 0; i < num2; i++)
            resultado += num1;

        mostrarResultado(num1, num2, resultado, '*');
    }

    private static void restar()
    {
        int num1 = leerNumero("NÚMERO 1: ");
        int num2 = leerNumero("NÚMERO 2: ");
        int resultado = num1 - num2;

        mostrarResultado(num1, num2, resultado, '-');
    }


    private static void sumar()
    {
        int num1 = leerNumero("NÚMERO 1: ");
        int num2 = leerNumero("NÚMERO 2: ");
        int resultado = num1 + num2;

        mostrarResultado(num1, num2, resultado, '+');
    }

    private static void mostrarResultado(int num1, int num2, int resultado, char operador)
    {
        System.out.printf("%d %c %d = %d%n", num1, operador, num2, resultado);
    }


    private static int leerNumero(String mensaje)
    {
        System.out.print(mensaje);
        return scanner.nextInt();
    }

    private static int leerOpcion()
    {
        System.out.print("OPCIÓN: ");
        return scanner.nextInt();
    }

    private static void mostrarOpciones()
    {
        System.out.print("""
                1. Sumar
                2. Restar
                3. Multiplicar
                4. Dividir
                5. Salir
                """);
    }
}
