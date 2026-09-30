package tema_1._05_poo.clases.simulacro;

public class Cruiser extends SpaceShip
{
    private int shieldCapacity;

    public Cruiser(String name, int energy, int shieldCapacity)
    {
        super(name, energy);
        this.shieldCapacity = shieldCapacity;
    }

    @Override
    public String performAction(SpaceShip target)
    {
        restoreEnergy(shieldCapacity);
        return String.format("[%s] ha activado sus escudos y sube su energía a [%d]", getName(), getEnergy());
    }
}
