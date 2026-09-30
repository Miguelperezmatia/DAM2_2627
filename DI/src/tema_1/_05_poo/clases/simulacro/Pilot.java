package tema_1._05_poo.clases.simulacro;

import java.util.ArrayList;

public class Pilot extends SystemUser
{
    public Pilot(String username, String password)
    {
        super(username, password);
    }

    @Override
    public void userSession(ArrayList<SpaceShip> fleet)
    {
        int option;

        while(true)
        {
            menu();
            option = InputUtils.readNumber("OPTION: ");

            switch (option)
            {
                case 1:
                    {
                        displayFleet(fleet);
                        break;
                    }
                case 2:
                    {
                        simulateFight(fleet);
                        break;
                    }
                case 3: return;

                default: System.out.println("Invalid option");
            }
        }
    }

    private void simulateFight(ArrayList<SpaceShip> fleet)
    {
        String name1 = InputUtils.readText("NOMBRE NAVE: ");
        String name2 = InputUtils.readText("NOMBRE NAVE: ");

        SpaceShip spaceShip1 = lookForSpaceShip(name1,fleet);
        SpaceShip spaceShip2 = lookForSpaceShip(name1,fleet);

        if(spaceShip1 != null && spaceShip2 != null)
        {
            String message = spaceShip1.performAction(spaceShip2);
            System.out.println(message);
            System.out.println(spaceShip2.toString());

            message = spaceShip2.performAction(spaceShip1);
            System.out.println(message);
            System.out.println(spaceShip1.toString());
        }
        System.out.println("No se encontró alguna de las naves");
    }
    private SpaceShip lookForSpaceShip(String name1, ArrayList<SpaceShip> fleet)
    {
        for(SpaceShip spaceShip : fleet)
        {
            if(spaceShip.getName().equals(name1))
                return spaceShip;
        }
        return null;
    }

    private void menu()
    {
        System.out.println("1. Mostrar flota\n2. Simular escaramuza\n 3. Desconectar");
    }
}
