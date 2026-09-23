package practicas.BrawlStars;

public class Legendary extends Brawler
{
    private int damage ;

    public Legendary(String name, int health, int damage)
    {
        super(name, health);
        this.damage = damage;
    }

    public int getDamage()
    {
        return damage;
    }

    @Override
    public Brawler actionByCategory(Brawler enemy)
    {
        return null;
    }

    
}
