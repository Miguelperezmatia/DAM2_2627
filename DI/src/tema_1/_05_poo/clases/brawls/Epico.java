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
        System.out.printf("%s con %d de vida de tipo épico atacando%n", nombre, vida);
    }

    @Override
    public void defender()
    {
        System.out.printf("%s con %d de vida de tipo épico defendiendo%n", nombre, vida);
    }

    @Override
    public void morir()
    {
        System.out.printf("%s con %d de vida de tipo épico muerto%n", nombre, vida);
    }
}
