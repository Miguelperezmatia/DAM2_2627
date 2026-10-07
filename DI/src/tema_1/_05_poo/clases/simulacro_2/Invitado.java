package tema_1._05_poo.clases.simulacro_2;


import tema_1._05_poo.clases.simulacro_3.Utilidades;

import java.util.ArrayList;

public class Invitado extends Usuario
{
    public Invitado(String username, String password)
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
            if(option == 2)
            {
                System.out.println();
                break;
            }
            else if(option == 1)
                verUsuarios(users);
            else
            {
                System.out.println("Opción inválida");
                System.out.println();
            }
        }
        
    }

    private void verUsuarios(ArrayList<Usuario> users)
    {
        System.out.println();

        if(users.size() - 1 == 0)
        {
            System.out.println("No hay nadie...");
            System.out.println();
            return;
        }

        //  Mostramos todos los usuarios excepto al que llama al metodo
        for(Usuario usuario : users)
        {
            if(!usuario.getUsername().equals(this.getUsername()))
                System.out.println("- " + usuario.getUsername());
        }

        System.out.println();
    }


    private void menu()
    {
        System.out.println("1. Ver usuarios\n2. Cerrar sesión");
    }
}
