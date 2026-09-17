package practicas;

import java.util.Scanner;

public class Calculadora
{
    /*
        Subí dos veces el mismo commit, quería decir "redefinir función sumar"
    */
    public static void main(String[] args)
    {
        mostrarOpciones();

        while(true)
        {
            int opcion = leerOpcion();

            if(opcion==5)
                break;

            ejecutarOpcion(opcion);
        }
    }

    static Scanner scanner = new Scanner(System.in);

    private static void ejecutarOpcion(int opcion)
    {
        System.out.println();

        if(opcion==1)
           sumar();
        else if(opcion==2)
            restar();
        else if(opcion==3)
            multiplicar();
        else if(opcion==4)
            dividir();
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
        System.out.printf("%d %c %d = %d%n%n", num1, operador, num2, resultado);
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
