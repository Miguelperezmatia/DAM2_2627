package tema_1._05_poo.clases.brawls;

public class Legendario implements Brawler
{

    @Override
    public void atacar()
    {
        System.out.println("LEGENDARIO ATACANDO");
    }

    @Override
    public void defender()
    {
        System.out.println("LEGENDARIO DEFENDIENDO");
    }

    @Override
    public void morir()
    {
        System.out.println("LEGENDARIO MUERTO");
    }
}
