public class Epic extends Brawler
{
    private int suministros;

    public Epic(String name, int health, int suministros)
    {
        super(name, health);
        this.suministros = suministros;
    }

    @Override
    public void actionByBrawler(Brawler enemy)
    {
        this.increaseHealth(suministros);
        System.out.printf("[%s:%d] Increase health to %d%n", this.getName(), this.getHealth(), this.getHealth());
        System.out.printf("[%s:%d]%n%n", enemy.getName(), enemy.getHealth());
    }
}
