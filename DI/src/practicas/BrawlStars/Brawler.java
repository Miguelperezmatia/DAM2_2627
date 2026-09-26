package practicas.BrawlStars;

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

    public void setName(String name)
    {
        this.name = name;
    }

    public void setHealth(int health)
    {
        this.health = health;
    }

    @Override
    public String toString()
    {
        return "[" + name + ":" + health + "]";
    }

    public Brawler increaseHealth(int supply)
    {
        this.health += supply;
        return this;
    }

    public Brawler reduceHealth(int damage)
    {
        this.health -= damage;
        return this;
    }

    public abstract Brawler actionByCategory(Brawler brawler);
}