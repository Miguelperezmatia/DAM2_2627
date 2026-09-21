package tema_1._05_poo.clases.brawls;

public class Epico implements Brawler
{
    private String nombre;
    private int vida;

    public Epico(int vida, String nombre)
    {
        this.vida = vida;
        this.nombre = nombre;
    }

    @Override
    public void atacar()
    {
        System.out.printf("%s con %d atacando%n", nombre, vida);
    }

    @Override
    public void defender()
    {
        System.out.printf("%s con %d defendiendo%n", nombre, vida);
    }

    @Override
    public void morir()
    {
        System.out.printf("%s con %d muerto%n", nombre, vida);
    }
}
