package tema_1._05_poo.clases.simulacro;

import java.util.ArrayList;

public class Commander extends SystemUser
{
    public Commander(String username, String password)
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
            option = InputUtils.readNumber("OPCIÓN: ");
            switch (option)
            {
                case 1:
                {
                    displayFleet(fleet);
                    break;
                }
                case 2:
                {
                    createCruiser(fleet);
                    break;
                }
                case 3:
                {
                    createFighter(fleet);
                    break;
                }
                case 4: return;

                default: System.out.println("Opción inválida");
            }
        }
    }

    private void createCruiser(ArrayList<SpaceShip> fleet)
    {
        String name = InputUtils.readText("NAME: ");
        int energy = InputUtils.readNumber("ENERGY: ");
        int shield = InputUtils.readNumber("SHIELD CAPACITY: ");

        Cruiser cruiser = new Cruiser(name,energy,shield);
        fleet.add(cruiser);
    }

    private void createFighter(ArrayList<SpaceShip> fleet)
    {
        String name = InputUtils.readText("NAME: ");
        int energy = InputUtils.readNumber("ENERGY: ");
        int firePower = InputUtils.readNumber("SHIELD CAPACITY: ");

        Fighter fighter = new Fighter(name,energy,firePower);
        fleet.add(fighter);
    }

    private void menu()
    {
        System.out.println("1. Mostrar flota\n2. Construir crucero\n 3. Construir caza\n 4. Reconectar");
    }
}
