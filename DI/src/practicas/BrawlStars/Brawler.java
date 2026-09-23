package practicas.BrawlStars;

public abstract class Brawler
{
    protected String name;
    protected int health;

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

    public abstract Brawler actionByCategory(Brawler brawler);
}