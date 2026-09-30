package tema_1._05_poo.clases.simulacro;

import java.util.ArrayList;

public abstract class SystemUser
{
    private String username;
    private String password;

    public SystemUser(String username, String password)
    {
        this.username = username;
        this.password = password;
    }

    public String getUsername()
    {
        return username;
    }

    public boolean checkPassword(String password)
    {
        return this.password.equals(password);
    }

    public static void displayFleet(ArrayList<SpaceShip> fleet)
    {
        if(fleet.isEmpty())
        {
            System.out.println("La flota está vacía");
            return;
        }

        for(SpaceShip spaceShip : fleet)
            System.out.println(spaceShip.toString());
    }

    public abstract void userSession(ArrayList<SpaceShip> fleet);
}
