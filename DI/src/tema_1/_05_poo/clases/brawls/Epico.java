package tema_1._05_poo.clases.brawls;

public class Epico extends Brawler {

    public Epico(String nombre, int vida)
    {
        super(nombre, vida);
    }

    @Override
    public void atacar()
    {
        System.out.printf("%s con %d de vida de tipo épico atacando%n", nombre, vida);
    }
}
