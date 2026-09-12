package tema_1._03_estructuras._02ArrayList;

import java.util.ArrayList;

public class _05Eliminar
{
    public static void main(String[] args) {

        ArrayList<String> names = new ArrayList<>();

        names.add("Carlos");
        names.add("Manolo");
        names.add("Laura");

        //  Eliminación por índice
        names.removeFirst();
        names.remove(1);

        //  Eliminación por valor
        names.remove("Manolo");


        System.out.println(names.size());   //  0
    }
}
