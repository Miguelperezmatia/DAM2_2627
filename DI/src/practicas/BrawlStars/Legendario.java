package practicas.BrawlStars;

public class Legendario extends Brawler
{

    private int damage ;

    public Legendario(String name, int health, int damage)
    {
        super(name, health);
        this.damage =damage;
    }

    @Override
    public Brawler actionByCategory(Brawler enemy)
    {
        return null;
    }
}
