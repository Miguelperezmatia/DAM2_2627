package practicas;

public class Calculadora
{
    public static void main(String[] args)
    {
        //  La multiplicacion se hace con un bucle for

        mostrarOpciones();

    }

    private static void mostrarOpciones()
    {
        System.out.printf("%s%n%s%n%s%n%s%n%s%n", "1. Sumar", "2. Restar", "3. Multiplicar", "4. Dividir", "5. Salir");
    }
}
