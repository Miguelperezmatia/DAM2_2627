import java.util.ArrayList;

public class Main
{
    private static final ArrayList<Brawler> BRAWLERS = new ArrayList<>();

    public static void main(String[] args)
    {
        int option = 0;

        while(true)
        {
            menu();
            option = Utils.readInt("OPTION: ");

            if(option == 5)
                break;
            else if(option == 1)
                verBrawlers(BRAWLERS);
            else if(option == 2)
                crearLegendario(BRAWLERS);
            else if(option == 3)
                crearEpico(BRAWLERS);
            else if(option == 4)
                combatir(BRAWLERS);
            else
                System.out.println("Opción inválida");
        }
    }

    private static void combatir(ArrayList<Brawler> brawlers)
    {
        String name1 = Utils.readString("Nombre del brawler 1: ");
        String name2 = Utils.readString("Nombre del brawler 2: ");

        Brawler brawler1 = comprobarBrawler(name1, brawlers);
        Brawler brawler2 = comprobarBrawler(name2, brawlers);

        if(brawler1 == null || brawler2 == null)
        {
            System.out.println("Uno de los brawlers no se ha encontrado");
            return;
        }

        mostrarBrawler(brawler1);
        mostrarBrawler(brawler2);

        System.out.println();

        brawler1.actionByBrawler(brawler2);
        brawler2.actionByBrawler(brawler1);
    }

    private static Brawler comprobarBrawler(String name1, ArrayList<Brawler> brawlers)
    {
        for(Brawler brawler:brawlers)
        {
            if(brawler.getName().equals(name1))
                return brawler;
        }

        return null;
    }

    private static void crearEpico(ArrayList<Brawler> brawlers)
    {
        String name = Utils.readString("NOMBRE: ");
        int health = Utils.readInt("VIDA: ");
        int suministros = Utils.readInt("SUMINISTROS: ");

        for(Brawler brawler : brawlers)
        {
            if(brawler.getName().equals(name))
            {
                System.out.printf("El brawler %s ya existe", name);
                return;
            }
        }

        brawlers.add(new Epic(name,health,suministros));
    }

    private static void crearLegendario(ArrayList<Brawler> brawlers)
    {
        String name = Utils.readString("NOMBRE: ");
        int health = Utils.readInt("VIDA: ");
        int danger = Utils.readInt("DAÑO: ");

        for(Brawler brawler : brawlers)
        {
            if(brawler.getName().equals(name))
            {
                System.out.printf("El brawler %s ya existe", name);
                return;
            }
        }

        brawlers.add(new Legendary(name,health,danger));
    }

    private static void verBrawlers(ArrayList<Brawler> brawlers)
    {
        if(brawlers.isEmpty())
        {
            System.out.println("No hay brawlers...\n");
            return;
        }

        for(Brawler brawler: brawlers)
            mostrarBrawler(brawler);

        System.out.println();
    }

    private static void mostrarBrawler(Brawler brawler)
    {
        System.out.printf("[%s:%d]%n",brawler.getName(),brawler.getHealth());
    }

    private static void menu()
    {
        System.out.println("1. Ver brawlers\n2. Crear brawler legendario\n3. Crear brawler epico\n4. Combatir\n5.Salir");
    }
}
