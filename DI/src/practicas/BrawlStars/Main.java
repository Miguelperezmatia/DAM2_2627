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
       Legendary legendary = createLegendaryBrawler();
       Epic epic = createEpicBrawler();

    }

    private static Epic createEpicBrawler()
    {
        String name = readDataString("Nombre: ");
        int health = readDataInt("Vida: ");
        int supplies = readDataInt("Suministros: ");

        return new Epic(name, health, supplies);
    }

    private static Legendary createLegendaryBrawler()
    {
        String name = readDataString("Nombre: ");
        int health = readDataInt("Vida: ");
        int damage = readDataInt("Daño: ");

        return new Legendary(name, health, damage);
    }

    private static int readDataInt(String message)
    {
        System.out.print(message);
        return scanner.nextInt();
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
