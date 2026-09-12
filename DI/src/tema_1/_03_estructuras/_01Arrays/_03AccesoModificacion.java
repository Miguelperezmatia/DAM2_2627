package tema_1._03_estructuras._01Arrays;

import java.util.Arrays;

public class _03AccesoModificacion
{
    public static void main(String[] args)
    {
        int[] numbers = {1,4,8};

        //  Acceso

        int a = numbers[0];
        a = numbers[1];
        a = numbers[2];

        System.out.println(a);


        //  Modificación

        numbers[0] = 50;

        System.out.println(Arrays.toString(numbers));
    }
}
