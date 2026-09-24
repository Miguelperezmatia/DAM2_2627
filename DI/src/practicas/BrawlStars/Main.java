package practicas.BrawlStars;

import java.util.ArrayList;
import java.util.Scanner;

public class Main
{
    static Scanner scanner = new Scanner(System.in);

    public static void main(String[] args)
    {
        createMenu();
        ArrayList<Brawler> brawlers =  crearListaBrawlers();
        int option = readDataInt("OPCION: ");
        executeOption(option,brawlers);
        Legendary legendary = createLegendaryBrawler();
        Epic epic = createEpicBrawler(brawlers);

    }

    private static void executeOption(int option, ArrayList<Brawler> brawlers)
    {
        if(option == 1)
            showBrawlers(brawlers);
        else if(option == 2)
            createLegendaryBrawler(brawlers);
        else if(option == 3)
            createEpicBrawler(brawlers);
        else if(option == 4)
            fight(brawlers);



    }

    private static void fight(ArrayList<Brawler> brawlers)
    {

    }

    private static void showBrawlers(ArrayList<Brawler> brawlers)
    {
        if(brawlers.isEmpty())
        {
            System.out.println("Todavía no hay brawlers creados...");
            return;
        }

        System.out.println(brawlers);
    }

    private static void createMenu()
    {
        System.out.println("""
                            1. Ver brawlers
                            2. Crear brawler legendario
                            3. Crear brawler épico
                            4. Combatir
                            5. Salir
                            """);
    }

    private static Epic createEpicBrawler(ArrayList<Brawler> brawlers)
    {
        String name = readDataString("Nombre: ");
        int health = readDataInt("Vida: ");
        int supplies = readDataInt("Suministros: ");

        Epic epic = new Epic(name, health, supplies);
        brawlers.add(epic);

        return epic;
    }

    private static Legendary createLegendaryBrawler(ArrayList<Brawler> brawlers)
    {
        String name = readDataString("Nombre: ");
        int health = readDataInt("Vida: ");
        int damage = readDataInt("Daño: ");

        Legendary legendary = new Legendary(name, health, damage);
        brawlers.add(legendary);

        return legendary;
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
