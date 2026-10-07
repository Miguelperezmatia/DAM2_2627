package tema_1._05_poo.clases.simulacro;

import tema_1._05_poo.clases.simulacro_3.Utilidades;

import java.util.ArrayList;

public class StarBaseApp
{
    private final static ArrayList<SpaceShip> SPACE_SHIPS = new ArrayList<SpaceShip>();
    private final static ArrayList<SystemUser> SYSTEM_USERS = new ArrayList<SystemUser>();

    public static void main(String[] args)
    {
        SYSTEM_USERS.add(new Commander("leia", "rebelde"));
        SYSTEM_USERS.add(new Pilot("luke", "fuerza"));

        while(true)
        {
            menu();
            int option = Utilidades.readInt("OPTION: ");
           if(option==1)
           {
           }


        }

    }

    private static void menu()
    {
        System.out.println("1. INICIAR SESIÓN\n2. APAGAR SISTEMA");
    }
}
