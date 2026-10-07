import java.util.ArrayList;

public class Main
{
    private static ArrayList<User> users = new ArrayList<>();

    public static void main(String[] args)
    {
        User admin1 = new Admin("migui", "hola");
        User guest1 = new Guest("m", "hola");

        users.add(admin1);
        users.add(guest1);

        int option = 0;

        while (true)
        {
            menu();
            option = Utils.readInt("OPTION: ");

            if(option == 2)
                break;
            else if(option == 1)
                iniciarSesion(users);
        }

    }

    private static void iniciarSesion(ArrayList<User> users)
    {
        String username = Utils.readString("USUARIO: ");
        String password = Utils.readString("CONTRASEÑA: ");

        for(User user: users)
        {
            if(user.comprobarInicioSesion(username, password))
            {
                user.actionByUser(users);
                return;
            }
        }
        System.out.println("Credenciales incorrectas");
    }

    private static void menu()
    {
        System.out.println("1. Iniciar sesión\n2. Salir");
    }
}
