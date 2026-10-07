public class Legendary extends Brawler
{
    private int danger;

    public Legendary(String name, int health, int danger)
    {
        super(name, health);
        this.danger = danger;
    }

    @Override
    public void actionByBrawler(Brawler enemy)
    {
        enemy.reduceHealth(danger);
        System.out.printf("[%s:%d] apply -%d damage to %s%n", this.getName(), this.getHealth(), danger, enemy.getHealth());
        System.out.printf("[%s:%d]%n%n", enemy.getName(), enemy.getHealth());
    }
}
