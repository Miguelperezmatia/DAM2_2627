package tema_1._05_poo.clases.brawls;

public class Mitico implements Brawler
{
    private String nombre;
    private int vida;

    public Mitico(int vida, String nombre)
    {
        this.vida = vida;
        this.nombre = nombre;
    }

    @Override
    public void atacar()
    {
        System.out.printf("%s con %d de vida de tipo mítico atacando%n", nombre, vida);
    }

    @Override
    public void defender()
    {
        System.out.printf("%s con %d de vida de tipo mítico defendiendo%n", nombre, vida);
    }

    @Override
    public void morir()
    {
        System.out.printf("%s con %d de vida de tipo mítico muerto%n", nombre, vida);
    }
}
