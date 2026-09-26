package practicas.BrawlStars;

import java.util.ArrayList;
import java.util.Scanner;

public class Main
{
    static Scanner scanner = new Scanner(System.in);

    public static void main(String[] args)
    {
        ArrayList<Brawler> brawlers =  crearListaBrawlers();
        int option;

        while(true)
        {
            createMenu();
            option = readDataInt("OPCION: ");
            if(option == 5)
                break;

            executeOption(option,brawlers);
        }
    }

    private static void executeOption(int option, ArrayList<Brawler> brawlers)
    {
        System.out.println();

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
        String name1 = readDataString("Nombre del Brawler 1: "); // Luis
        String name2 = readDataString("Nombre del Brawler 2: "); //  Paco

        Brawler brawler1 = lookForBrawler(brawlers, name1);
        Brawler brawler2 = lookForBrawler(brawlers, name2);

        if(brawler1 != null && brawler2 != null)
        {
            validFight(brawler1, brawler2);
            return;
        }

        System.out.println("Uno de los brawlers no se ha encontrado...\n");
    }

    private static void validFight(Brawler brawler1, Brawler brawler2)
    {
        System.out.println(brawler1.toString());
        System.out.println(brawler2.toString() + "\n");

        showFightByCategory(brawler1, brawler2);
        showFightByCategory(brawler2, brawler1);
    }

    private static void showFightByCategory(Brawler brawler, Brawler enemy)
    {
        if(brawler instanceof Epic)
        {
            brawler.actionByCategory(brawler);
            System.out.printf("%s Increase health to %d%n", brawler.toString(), brawler.getHealth());
            System.out.println(enemy.toString() + "\n");
            return;
        }

        int oldHealth = enemy.getHealth();
        brawler.actionByCategory(enemy);
        int damage = oldHealth - enemy.getHealth();

        System.out.printf("%s Apply -%d damage to %s%n", brawler.toString(), damage, enemy.getName());
        System.out.println(enemy.toString() + "\n");
    }

    private static Brawler lookForBrawler(ArrayList<Brawler> brawlers, String name1)
    {
        for(Brawler brawler : brawlers)
        {
            if(brawler.getName().equals(name1))
                return brawler;
        }

        return null;
    }


    private static void showBrawlers(ArrayList<Brawler> brawlers)
    {
        if(brawlers.isEmpty())
        {
            System.out.println("Todavía no hay brawlers creados...\n");
            return;
        }

        for(Brawler brawler:brawlers)
            System.out.println(brawler.toString());

        System.out.println();
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

        System.out.println();

        return epic;
    }

    private static Legendary createLegendaryBrawler(ArrayList<Brawler> brawlers)
    {
        String name = readDataString("Nombre: ");
        int health = readDataInt("Vida: ");
        int damage = readDataInt("Daño: ");

        Legendary legendary = new Legendary(name, health, damage);
        brawlers.add(legendary);

        System.out.println();

        return legendary;
    }

    private static int readDataInt(String message)
    {
        System.out.print(message);
        int dato = scanner.nextInt();
        scanner.nextLine();
        return dato;
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
