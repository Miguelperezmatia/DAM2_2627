package tema_1._05_poo.clases.brawls;

public class Brawler
{
    protected String nombre;
    protected int vida;

    public Brawler(String nombre, int vida)
    {
        this.nombre = nombre;
        this.vida = vida;
    }

    public void atacar()
    {
        System.out.printf("%s con vida %d atacando", nombre, vida);
    }
}
