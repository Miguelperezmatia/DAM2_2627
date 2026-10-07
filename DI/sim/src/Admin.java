import java.util.ArrayList;


public class Admin extends User
{
    public Admin(String username, String password)
    {
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

            if(option == 3)
                break;
            else if(option == 1)
                verUsuarios(users);
            else if(option == 2)
                crearUsuario(users);
            else
                System.out.println("Opción inválida");
        }

    }

    private void crearUsuario(ArrayList<User> users)
    {
        String username = Utils.readString("NUEVO NOMBRE:");
        String password = Utils.readString("NUEVO NOMBRE:");

        User newUser = existirUsuario(users,username,password);

        if(newUser != null)
            users.add(newUser);
    }

    private User existirUsuario(ArrayList<User> users, String username, String password)
    {
        for(User user: users)
        {
            if(user.getUsername().equals(username))
            {
                System.out.println("El usuario ya existe...");
                return null;
            }
        }
        return new Guest(username,password);
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

    private void menu()
    {
        String s = "---------------\n" +
                "Bienvenido " + this.getUsername() + "\n" +
                "1. Ver usuarios\n" +
                "2. Crear usuario\n"+
                "3. Cerrar sesión";

        System.out.println(s);
    }
}
