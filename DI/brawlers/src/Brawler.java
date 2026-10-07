public abstract class Brawler
{
    private String name;
    private int health;

    public Brawler(String name, int health)
    {
        this.name = name;
        this.health = health;
    }

    public String getName()
    {
        return name;
    }

    public int getHealth()
    {
        return health;
    }

    public void increaseHealth(int health)
    {
        this.health += health;
    }

    public void reduceHealth(int danger)
    {
        this.health -= health;
    }

    public abstract void actionByBrawler(Brawler enemy);
}