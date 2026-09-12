package tema_1._03_estructuras._02ArrayList;

import java.util.ArrayList;

public class _03Añadir
{
    public static void main(String[] args)
    {
        ArrayList<String> names = new ArrayList<>();

        names.add("Manolo");
        names.add("Carlos");

        System.out.println(names.size());   //  2
    }
}
