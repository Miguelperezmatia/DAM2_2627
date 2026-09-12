package tema_1._03_estructuras._02ArrayList;

import java.util.ArrayList;

public class _02Acceso
{
    public static void main(String[] args)
    {
        ArrayList<String> names = new ArrayList<>();

        names.add("Carlos");
        names.add("Manolo");
        names.add("Laura");

        //  Acceso

        System.out.println(names.getFirst());   //  Carlos
        System.out.println(names.getLast());    //  Laura
        System.out.println(names.get(1));       //  Manolo
    }
}
