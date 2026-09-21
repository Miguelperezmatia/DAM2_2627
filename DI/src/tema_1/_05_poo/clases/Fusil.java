package tema_1._05_poo.clases;

public class Fusil implements Arma
{
    @Override
    public void disparar()
    {
        System.out.println("FUSIL DISPARANDO...");
    }

    @Override
    public void recargar()
    {
        System.out.println("FUSIL RECARGAR");
    }
}
