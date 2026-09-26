package practicas.BrawlStars;

import java.util.ArrayList;
import java.util.Scanner;

public class Main
{
    //  Variable estática (pertenece a la clase) que se usa para leer datos que escriba el usuario
    static Scanner scanner = new Scanner(System.in);

    //  Punto de inicio del programa
    public static void main(String[] args)
    {
        //  Objeto de tipo ArrayList<Brawler> que guardará los objetos de tipo Brawler
        ArrayList<Brawler> brawlers =  createBrawlerList();
        int option;

        //  Bucle infinito que muestra el menú y ejecuta las diferentes opciones introducidas por el usuario hasta que se cumpla la condición de salida
        while(true)
        {
            createMenu();
            option = readDataInt("OPCION: ");
            if(option == 5)
                break;  //  Salida del bucle, fín del programa

            executeOption(option,brawlers);
        }
    }

    /*
        Metodo que llama a otros métodos en función de la opción del usuario

        Recibe un parámetro de tipo int que representa la opción escogiga y un objeto de tipo ArrayList<Brawler> que representa la lista dónde
        se guardan los objetos de tipo Brawler
     */
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

    /*
        Metodo que lee dos nombres (introducidos por el usuario) de dos objetos de tipo Brawler y se comprueba que existen

            Si existen, se llama a otro metodo para que luchen entre ellos
            En caso contrario, no se lucha y se avisa al usuario
    */
    private static void fight(ArrayList<Brawler> brawlers)
    {
        String name1 = readDataString("Nombre del Brawler 1: ");
        String name2 = readDataString("Nombre del Brawler 2: ");

        Brawler brawler1 = lookForBrawler(brawlers, name1);
        Brawler brawler2 = lookForBrawler(brawlers, name2);

        if(brawler1 != null && brawler2 != null)
        {
            validFight(brawler1, brawler2);
            return;
        }

        System.out.println("Uno de los brawlers no se ha encontrado...\n");
    }

    /*
        Metodo que se basa en mostrar la lucha de dos objetos de tipo Brawler habiendo comprobado anteriormente que existen

            Para ello, se muestran por pantalla sus características y se llama a su vez a otro metodo para aplicar características especiales
            según su tipo
    */
    private static void validFight(Brawler brawler1, Brawler brawler2)
    {
        System.out.println(brawler1.toString());
        System.out.println(brawler2.toString() + "\n");

        showFightByCategory(brawler1, brawler2);
        showFightByCategory(brawler2, brawler1);
    }

    /*
        Metodo que muestra la lucha de dos Brawlers

            Para ello comprobamos si es de tipo Epic o Legendary, ya que cada uno tiene su ataque o característica principal
            Después llamamos al metodo brawler.actionByCategory(Brawler brawler) que dependiendo del tipo se comporta de manera diferente
    */
    private static void showFightByCategory(Brawler brawler, Brawler enemy)
    {
        if(brawler instanceof Epic)
        {
            brawler.actionByCategory(enemy);
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

    /*
        Metodo que comprueba que el nombre introducido por el usuario existe en el Arraylist de tipo ArrayList<Brawler> que guarda
        objetos de tipo Brawler

            Si existe, devuelve el objeto
            En caso contrario, devuelve null
    */
    private static Brawler lookForBrawler(ArrayList<Brawler> brawlers, String name1)
    {
        for(Brawler brawler : brawlers)
        {
            if(brawler.getName().equals(name1))
                return brawler;
        }

        return null;
    }

    /*
        Metodo que muestra los brawlers del arrayList de tipo ArrayList<Brawler>

            Si no existe ninguno, se avisa al usuario
            Si hay al menos uno, se muestran las características llamando al metodo toString()
    */
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

    //  Metodo que muestra el menú con las diferentes opciones que puede elegir el usuario
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

    /*
        Metodo que crea un objeto de tipo Epic

            Se pide name, health y supplies al usuario
            Se crea el objeto y se añade al arrayList de tipo ArrayList<Brawler>
            Por último se devuelve el objeto creado
    */
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

    /*
        Metodo que crea un objeto de tipo Legendary

            Se pide name, health y damage al usuario
            Se crea el objeto y se añade al arrayList de tipo ArrayList<Brawler>
            Por último se devuelve el objeto creado
    */
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

    /*
        Metodo para leer y devolver datos de tipo Int pasando un mensaje de tipo String como parámetro

        Importante llamar al metodo nextLine() para limpiar la entrada del usuario:
            El metodo nextInt() solo busca números y deja el enter del usuario (representado como \n) en la memoria del programa.
     */
    private static int readDataInt(String message)
    {
        System.out.print(message);
        int dato = scanner.nextInt();
        scanner.nextLine();
        return dato;
    }

    //  Metodo para leer y devolver datos de tipo String pasando un mensaje de tipo String como parámetro
    private static String readDataString(String message)
    {
        System.out.print(message);
        return scanner.nextLine();
    }

    //  Metodo para devolver un objeto de tipo ArrayList<Brawler> vacío
    private static ArrayList<Brawler> createBrawlerList()
    {
        return new ArrayList<Brawler>();
    }
}
