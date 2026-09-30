package tema_1._05_poo.clases.simulacro;

public abstract class SpaceShip
{
    private String name;
    private int energy;

    public SpaceShip(String name, int energy)
    {
        this.name = name;
        this.energy = energy;
    }

    public String getName()
    {
        return name;
    }

    public int getEnergy()
    {
        return energy;
    }

    @Override
    public String toString()
    {
        return String.format("[Nave: %s | Energy: %d]", name, energy);
    }

    public SpaceShip restoreEnergy(int amount)
    {
        energy+=amount;
        return this;
    }

    public SpaceShip takeDamage(int damage)
    {
        energy-=damage;
        return this;
    }

    public abstract String performAction(SpaceShip spaceShip);
}
