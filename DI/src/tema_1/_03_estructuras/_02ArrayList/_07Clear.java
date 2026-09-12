package tema_1._03_estructuras._02ArrayList;

import java.util.ArrayList;

public class _07Clear
{
    public static void main(String[] args) {

        ArrayList<String> names = new ArrayList<>();

        names.add("Carlos");
        names.add("Manolo");
        names.add("Laura");

        names.clear();

        System.out.println(names);  //  []
    }
}
