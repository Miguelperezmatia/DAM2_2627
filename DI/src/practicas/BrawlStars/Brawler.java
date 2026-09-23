package practicas.BrawlStars;

public class Brawler
{
    protected String name;
    protected int damage;

    public Brawler(String name, int damage)
    {
        this.name = name;
        this.damage = damage;
    }

    public String getName()
    {
        return name;
    }

    public int getDamage()
    {
        return damage;
    }

    public void setName(String name)
    {
        this.name = name;
    }

    public void setDamage(int damage)
    {
        this.damage = damage;
    }

    
}