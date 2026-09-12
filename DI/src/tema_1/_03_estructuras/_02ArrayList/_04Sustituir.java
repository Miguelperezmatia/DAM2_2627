package tema_1._03_estructuras._02ArrayList;

import java.util.ArrayList;

public class _04Sustituir
{
    public static void main(String[] args) {
        ArrayList<String> names = new ArrayList<>();

        names.add("Carlos");
        names.add("Manolo");
        names.add("Laura");


        //  Reemplazo

        names.set(0,"Miguel");

        System.out.println(names.getFirst());   //  Miguel
    }
}
