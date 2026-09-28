package practicas.BrawlStars;

import java.util.ArrayList;
import java.util.Scanner;

public class Main2
{

    //  Punto de inicio de ejecución del programa
    public static void main(String[] args)
    {
        ArrayList<Brawler> brawlers = createBrawlersList();
        ArrayList<User> users = createUsersList();

        addUsers(users);

        while (true)
        {
            createSystemMenu();
            int option = Utils.readInt("OPCIÓN: ");

            if (option == 2)
                break;      //  Fín del programa
            else if (option == 1)
                login(users, brawlers);
             else
                System.out.println("Opción no válida.\n");
        }
    }

    //  Menú de inicio de sesión
    private static void createSystemMenu()
    {
        System.out.println("""
                1.  Iniciar sesión
                2.  Salir
                """);
    }

    /*
        Metdo que procesa el inicio de sesión
            Se leen datos de username y password
            Se valida el usuario (si hay algo mal se devuelve null)
            Si el usuario es correcto se muestran más acciones; Si no se avisa al usuario
    */
    private static void login(ArrayList<User> users, ArrayList<Brawler> brawlers)
    {
        String userName = Utils.readString("Usuario: ");
        String password = Utils.readString("Contraseña: ");

        User user = validUser(users, userName, password);

        if(user != null)
        {
            showActionByUser(user, brawlers);
            return;
        }
        System.out.println("Datos incorrectos");
    }

    /*
        Metodo que ejcuta la accion de Admin o de Guest una vez que el inicio de sesión se ha comprobado que
        es correcto
    */
    private static void showActionByUser(User user, ArrayList<Brawler> brawlers)
    {
        System.out.println("Inicio de sesión correcto\n");
        user.actionByUser(brawlers);
    }

    /*
        Metodo que comprueba si un inicio de sesión es exitoso o no

            Si usuario y contraseña son las mismas que las que introduce el usuario el inicio de sesiñon es válido
            y se devuelve el objeto

            En caso contrario, se devuelve null
    */
    private static User validUser(ArrayList<User> users, String userName, String password)
    {
        for(User user : users)
        {
            if(user.getUser().equals(userName) && user.isValidPassword(password))
                return user;
        }

        return null;
    }

    //  Metodo que devuelve un Arraylist<User> vacío
    private static ArrayList<User> createUsersList()
    {
        return new ArrayList<User>();
    }
    //  Metodo para añadir un usuario de tipo Admin y otro de tipo Guest
    private static void addUsers(ArrayList<User> users)
    {
        Admin admin = new Admin("admin", "hola");
        Guest guest = new Guest("guest", "adios");

        users.add(admin);
        users.add(guest);
    }

    //  Metodo que devuelve un Arraylist<Brawler> vacío
    private static ArrayList<Brawler> createBrawlersList()
    {
        return new ArrayList<Brawler>();
    }
}