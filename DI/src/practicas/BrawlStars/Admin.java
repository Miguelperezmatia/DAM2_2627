package practicas.BrawlStars;

import java.util.ArrayList;
import java.util.Scanner;

    //  Clase que hereda de User
    public class Admin extends User
    {

    //  Constructor
    public Admin(String user, String password)
    {
        super(user, password);
    }

    //  Metodo sobreescrito que muestra un menú y ejecuta las distintas opciones de un usuario de tipo Admin
    @Override
    public void actionByUser(ArrayList<Brawler> brawlers)
    {
        while (true)
        {
            createAdminMenu();
            int option = Utils.readInt("OPCIÓN: ");

            if (option == 4)
            {
                System.out.println("Cerrando sesión de administrador...\n");
                break;      // Sale del bucle while(true) y vuelve al Main
            }

            executeAdminOption(option, brawlers);
        }
    }

    //  Menú para un Admin
    private void createAdminMenu()
    {
        System.out.println("""
                1. Ver brawlers
                2. Crear brawler épico
                3. Crear brawler legendario
                4. Cerrar sesión
                """);
    }

    //  Metodo que ejecuta opciones de Admin llamando a diversos metodos según corresponda
    private void executeAdminOption(int option, ArrayList<Brawler> brawlers)
    {
        if (option == 1)
            showBrawlers(brawlers);
        else if (option == 2)
            createEpicBrawler(brawlers);
        else if (option == 3)
            createLegendaryBrawler(brawlers);
        else
            System.out.println("Opción no válida\n");
    }

    //  Creación de brawler de tipo épico y lo añadimos al arrayList de tipo Brawler
    private void createEpicBrawler(ArrayList<Brawler> brawlers)
    {
        String name = Utils.readString("Nombre: ");
        int health = Utils.readInt("Vida: ");
        int supplies = Utils.readInt("Suministros: ");

        Epic epic = new Epic(name, health, supplies);
        brawlers.add(epic);
    }

    //  Creación de brawler de tipo legendario y lo añadimos al arrayList de tipo Brawler
    private void createLegendaryBrawler(ArrayList<Brawler> brawlers)
    {
        String name = Utils.readString("Nombre: ");
        int health = Utils.readInt("Vida: ");
        int damage = Utils.readInt("Daño: ");

        Legendary legendary = new Legendary(name, health, damage);
        brawlers.add(legendary);
    }
}