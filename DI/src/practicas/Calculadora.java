package practicas;

import java.util.Scanner;

public class Calculadora
{
    //  Punto de ejecución del programa Calculadora básica.
    public static void main(String[] args)
    {
        //  Se muestran las opciones de la calculadora junto con sus acciones.
        mostrarOpciones();

        //  Bucle infinito hasta que se cumpla la condición de salida
        while(true)
        {
            //  Se llama a la función leerOpcion() y el valor se almacena en una variable de tipo Int.
            int opcion = leerOpcion();

            /*
                Si la opción es la 5 (salir), salimos del bucle y se acaba el programa.
                Si no, se llama a la función ejecutarOpcion().
             */
            if(opcion==5)
                break;

            //  Realiza y muestra por pantalla las opciones llamando a su vez a otras funciones.
            ejecutarOpcion(opcion);
        }
    }

    /*
        Objeto de tipo Scanner usado para leer datos por consola.
        Debe ser estática porque se crea fuera de la función Main, es decir, pertenece a la propia clase.
     */
    static Scanner scanner = new Scanner(System.in);

    /*
        Función que por medio de un condicional llama a otras funciones dependiendo de la opción elegida por el usuario.
        Recibe como parámetro un dato de tipo Int que representa cada una de las acciones de la calculadora, excepto la opción 5 (salir) que fue
        tratada con anterioridad de otra forma.
    */
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

    /*
      Función que lee dos números por medio de la función leerNumero(), almacena la división de dichos números en una variable y
      se llama a la función mostrarResultado() para imprimir la salida deseada.

      Si se divide entre 0 habrá un error ya que el programa no captura excepciones.
   */
    private static void dividir()
    {
        int num1 = leerNumero("NÚMERO 1: ");
        int num2 = leerNumero("NÚMERO 2: ");

        int resultado = num1 / num2;

        mostrarResultado(num1, num2, resultado, '/');
    }

    /*
      Función que lee dos números por medio de la función leerNumero(), a través de un bucle for() se realiza la multiplicación y se almacena en
      una variable iniciada a cero y que va acumulando el valor. Después. se llama a la función mostrarResultado() para imprimir la salida deseada.
   */
    private static void multiplicar()
    {
        int num1 = leerNumero("NÚMERO 1: ");
        int num2 = leerNumero("NÚMERO 2: ");

        int resultado = 0;

        for (int i = 0; i < num2; i++)
            resultado += num1;

        mostrarResultado(num1, num2, resultado, '*');
    }

    /*
      Función que lee dos números por medio de la función leerNumero(), almacena la resta de dichos números en una variable y
      se llama a la función mostrarResultado() para imprimir la salida deseada.
   */
    private static void restar()
    {
        int num1 = leerNumero("NÚMERO 1: ");
        int num2 = leerNumero("NÚMERO 2: ");
        int resultado = num1 - num2;

        mostrarResultado(num1, num2, resultado, '-');
    }

    /*
        Función que lee dos números por medio de la función leerNumero(), almacena la suma de dichos números en una variable y
        se llama a la función mostrarResultado() para imprimir la salida deseada.
    */
    private static void sumar()
    {
        int num1 = leerNumero("NÚMERO 1: ");
        int num2 = leerNumero("NÚMERO 2: ");
        int resultado = num1 + num2;

        mostrarResultado(num1, num2, resultado, '+');
    }

    /*
        Función que muestra el resultado formateado.
        Recibe 3 variables de tipo Int (el primer número, el segundo número y el resultado de la operación que se realice) y también una variable de tipo Char
        que representa el operador de la operación ('+', '-', '*', '/').
        Se añaden saltos de línea para conseguir un programa en consola más legible.
    */
    private static void mostrarResultado(int num1, int num2, int resultado, char operador)
    {
        System.out.printf("%d %c %d = %d%n%n", num1, operador, num2, resultado);
    }

     /*
        Función que devuelve por medio de un Int el número que escriba el usuario.
        Recibe como parámetro una variable de tipo String para escribir lo que le vayamos a solicitar al usuario (en este caso, los dos números).
        El dato se lee a través del objeto Scanner estático creado anteriormente.
     */
    private static int leerNumero(String mensaje)
    {
        System.out.print(mensaje);
        return scanner.nextInt();
    }

    /*
        Función que devuelve por medio de un Int la opción elegida por el usuario.
        El dato se lee a través del objeto Scanner estático creado anteriormente.
     */
    private static int leerOpcion()
    {
        System.out.print("OPCIÓN: ");
        return scanner.nextInt();
    }

    //  Función que imprime por pantalla las distintas opciones para el usuario.
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
