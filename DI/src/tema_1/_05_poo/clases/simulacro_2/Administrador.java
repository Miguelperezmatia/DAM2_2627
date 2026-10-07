package tema_1._05_poo.clases.simulacro_2;

import tema_1._05_poo.clases.simulacro_3.Utilidades;

import java.util.ArrayList;

public class Administrador extends Usuario
{
    public Administrador(String username, String password)
    {
        super(username, password);
    }

    @Override
    public void actionByUser(ArrayList<Usuario> users)
    {
        //  Llamamos a this.getUserName()
        System.out.printf("---------------%nBienvenido, %s%n", this.getUsername());

        int option = 0;

        while(true)
        {
            menu();
            option = Utilidades.readInt("OPCIÓN: ");
            if(option == 3)
            {
                System.out.println();
                break;
            }
            else if(option == 1)
                verUsuarios(users);
            else if(option == 2)
                crearUsuario(users);
            else
                System.out.println("Opción inválida\n");
        }

    }

    private void crearUsuario(ArrayList<Usuario> users)
    {
        String userName = Utilidades.readString("USERNAME: ");
        String password = Utilidades.readString("PASSWORD: ");

        if(serMismoUsuario(users, userName))
        {
            System.out.println("El usuario ya existe...\n");
            return;
        }

        users.add(new Invitado(userName, password));
        System.out.println("Usuario creado correctamente...\n");
    }

    private boolean serMismoUsuario(ArrayList<Usuario> users, String userName)
    {
        for(Usuario usuario: users)
        {
            if(usuario.getUsername().equals(userName))
                return true;
        }

        return false;
    }

    private void verUsuarios(ArrayList<Usuario> users)
    {
        if(users.size() - 1 == 0)
        {
            System.out.println("No hay nadie...");
            return;
        }

        System.out.println();
        for(Usuario usuario : users)
        {
            if (!usuario.getUsername().equals(this.getUsername()))
                System.out.println("- " + usuario.getUsername());
        }

        System.out.println();
    }


    private void menu()
    {
        System.out.printf("1. Ver usuarios%n2. Crear Usuario%n3. Cerrar sesión%n");
    }
}
