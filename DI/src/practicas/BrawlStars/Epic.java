package practicas.BrawlStars;

public class Epic extends Brawler
{
    private int supplies;

    public Epic(String name, int health, int supplies)
    {
        super(name, health);
        this.supplies = supplies;
    }

    public int getSupplies()
    {
        return supplies;
    }

    @Override
    public Brawler actionByCategory(Brawler enemy)
    {
        return this.increaseHealth(supplies);
    }
}