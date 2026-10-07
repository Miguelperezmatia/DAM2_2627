package tema_1._05_poo.clases.simulacro_2;


import tema_1._05_poo.clases.simulacro_3.Utilidades;

import java.util.ArrayList;

public class Main
{

    //  Privado y estático, el main es estático por lo que solo se pueden usar variables y objetos estáticos
    private static final ArrayList<Usuario> usuarios = new ArrayList<>();

    public static void main(String[] args)
    {
        usuarios.add(new Administrador("migui", "hola"));
        usuarios.add(new Invitado("miri", "hola"));


        int option = 0;
        while(true)
        {
            menu();
            option = Utilidades.readInt("OPTION: ");
            System.out.println();

            if (option == 2)
                break;
            else if(option == 1)
                iniciarSesion(usuarios);
            else
                System.out.println("Opción incorrecta...");
        }
    }

    private static void iniciarSesion(ArrayList<Usuario> usuarios)
    {
        String userName = Utilidades.readString("USERNAME: ");
        String password = Utilidades.readString("PASSWORD: ");

        Usuario usuario = validLogIn(usuarios, userName, password);

        if(usuario != null)
        {
            System.out.println();
            usuario.actionByUser(usuarios);
            return;
        }

        System.out.println("Credenciales incorrectas\n");
    }

    private static Usuario validLogIn(ArrayList<Usuario> usuarios, String userName, String password)
    {
        for(Usuario usuario: usuarios)
        {
            if(usuario.isValidPassword(userName,password))
                return usuario;
        }

        return null;
    }

    private static void menu()
    {
        System.out.println("1. Iniciar sesión\n2. Salir");
    }
}
