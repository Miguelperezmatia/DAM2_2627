package tema_1._05_poo.clases.brawls;

public class Mitico implements Brawler
{

    @Override
    public void atacar()
    {
        System.out.println("MITICO ATACANDO");
    }

    @Override
    public void defender()
    {
        System.out.println("MITICO DEFENDIENDO");
    }

    @Override
    public void morir()
    {
        System.out.println("MITICO MUERTO");
    }
}
