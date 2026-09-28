package practicas.BrawlStars;

import java.util.ArrayList;
import java.util.Scanner;

    //  Clase que hereda de User
    public class Guest extends User
    {

    //  Constructor
    public Guest(String user, String password)
    {
        super(user, password);
    }

    //  Metodo sobreescrito que muestra un menú y ejecuta las distintas opciones de un usuario de tipo Guest
    @Override
    public void actionByUser(ArrayList<Brawler> brawlers)
    {
        while (true)
        {
            createGuestMenu();
            int option = Utils.readInt("OPCIÓN: ");

            if (option == 3)
            {
                System.out.println("Cerrando sesión de invitado...\n");
                break;      // Sale del bucle while(true) y vuelve al Main
            }

            executeGuestOption(option, brawlers);
        }
    }

        //  Menú para un Guest
        private void createGuestMenu()
        {
            System.out.println("""
                1. Ver brawlers
                2. Combatir
                3. Cerrar sesión
                """);
        }

        //  Metodo que ejecuta opciones de Guest llamando a diversos metodos según corresponda
        private void executeGuestOption(int option, ArrayList<Brawler> brawlers)
        {
        if (option == 1)
            showBrawlers(brawlers);
        else if (option == 2)
            fight(brawlers);
        else
            System.out.println("Opción no válida\n");

    }

        //  Metodo explicado en Main
        private void fight(ArrayList<Brawler> brawlers)
    {
        String name1 = Utils.readString("Nombre del Brawler 1: ");
        String name2 = Utils.readString("Nombre del Brawler 2: ");

        Brawler brawler1 = lookForBrawler(brawlers, name1);
        Brawler brawler2 = lookForBrawler(brawlers, name2);

        if (brawler1 != null && brawler2 != null)
        {
            System.out.println(brawler1.toString());
            System.out.println(brawler2.toString() + "\n");

            System.out.println(brawler1.actionByCategory(brawler2));
            System.out.println(brawler2.toString() + "\n");

            System.out.println(brawler2.actionByCategory(brawler1));
            System.out.println(brawler1.toString() + "\n");
            return;
        }

        System.out.println("Uno de los brawlers no se ha encontrado...\n");
    }

    //  Metodo explicado en Main
    private Brawler lookForBrawler(ArrayList<Brawler> brawlers, String name)
    {
        for (Brawler brawler : brawlers)
        {
            if (brawler.getName().equals(name))
                return brawler;
        }

        return null;
    }
}