package tema_1._05_poo.clases.brawls;

public class Epico implements Brawler
{

    @Override
    public void atacar()
    {
        System.out.println("EPICO ATACANDO");
    }

    @Override
    public void defender()
    {
        System.out.println("EPICO DEFENDIENDO");
    }

    @Override
    public void morir()
    {
        System.out.println("EPICO MUERTO");
    }
}
