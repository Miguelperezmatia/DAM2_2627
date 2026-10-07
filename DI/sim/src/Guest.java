import java.util.ArrayList;

public class Guest extends  User
{

    public Guest(String username, String password) {
        super(username, password);
    }

    @Override
    public void actionByUser(ArrayList<User> users)
    {
        int option = 0;

        while (true)
        {
            menu();
            option = Utils.readInt("OPTION: ");

            if(option == 2)
                break;
            else if(option == 1)
                verUsuarios(users);
            else
                System.out.println("Opción inválida");
        }
    }

    private void menu()
    {
        String s = "---------------\n" +
                "Bienvenido " + this.getUsername() + "\n" +
                "1. Ver usuarios\n" +
                "2. Crear sesión";

        System.out.println(s);
    }

    private void verUsuarios(ArrayList<User> users)
    {
        if(users.size() == 1)
        {
            System.out.println("No hay más usuarios a parte de ti");
            return;
        }

        for(User user:users)
        {
            if (user.getUsername() != this.getUsername())
                System.out.println("- " + user.getUsername());
        }
    }
}
