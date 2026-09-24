package practicas.BrawlStars;

import tema_1._05_poo.clases.brawls.Legendario;

import java.util.ArrayList;
import java.util.Scanner;

public class Main
{
    static Scanner scanner = new Scanner(System.in);

    public static void main(String[] args)
    {
       ArrayList<Brawler> brawlers =  crearListaBrawlers();
       String name = readDataString("Nombre: ");
       int

    }

    private static String readDataString(String message)
    {
        System.out.print(message);
        return scanner.nextLine();
    }


    private static ArrayList<Brawler> crearListaBrawlers()
    {
        return new ArrayList<Brawler>();
    }


}
