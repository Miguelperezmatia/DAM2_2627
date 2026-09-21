package tema_1._05_poo.clases;

public class Pistola implements Arma
{
    @Override
    public void disparar()
    {
        System.out.println("PISTOLA DISPARANDO...");
    }

    @Override
    public void recargar()
    {
        System.out.println("PISTOLA RECARGANDO...");
    }
}
