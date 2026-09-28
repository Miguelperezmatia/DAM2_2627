package practicas.BrawlStars;

import java.util.ArrayList;
import java.util.Scanner;

public abstract class User
{
    //  Atributos de usuario y contraseña
    private String user;
    private String password;

    //  Constructor
    public User(String user, String password)
    {
        this.user = user;
        this.password = password;
    }

    //  Metodo getter del user
    public String getUser()
    {
        return user;
    }

    //  Metodo que devuelve un boolean dependiendo de si la contraseña es correcta o no
    public boolean isValidPassword(String password)
    {
        return this.password.equals(password);
    }

    //  Metodo abstracto: dependiendo de si es User o Admin se comportará diferente
    public abstract void actionByUser(ArrayList<Brawler> brawlers);

    /*
        Metodo que muestra los brawlers
        Explicado en el Main principal
    */
    public static void showBrawlers(ArrayList<Brawler> brawlers)
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
}