package tema_1._05_poo.clases.simulacro;

public class Fighter extends SpaceShip
{
    private int firePower;
    public Fighter(String name, int energy, int firePower)
    {
        super(name, energy);
        this.firePower = firePower;
    }

    @Override
    public String performAction(SpaceShip spaceShip)
    {
        spaceShip.takeDamage(firePower);
        return String.format("[%s] dispara e inflinge %d de daño a [%s]", getName(), firePower, spaceShip.getName());
    }
}
