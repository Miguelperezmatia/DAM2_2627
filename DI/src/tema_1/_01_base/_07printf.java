package tema_1._01_base;

public class _07printf
{
    public static void main(String[] args)
    {
        int num1 = 34;
        int num2 = 4;
        int suma = num1 + num2;

        /*
            %s  para cadenas
            %n  salto de líneas
         */

        System.out.printf("%d + %d = %d%n", num1, num2, suma);
    }
}
