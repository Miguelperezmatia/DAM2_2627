package tema_1._03_estructuras._02ArrayList;

import java.util.ArrayList;

public class _06Buscar
{
    public static void main(String[] args) {

        ArrayList<String> names = new ArrayList<>();

        names.add("Carlos");
        names.add("Manolo");
        names.add("Laura");

        //  Búsqueda

        System.out.println(names.contains("Carlos"));   //  true
        System.out.println(names.contains("Alberto"));  //  false
    }
}
