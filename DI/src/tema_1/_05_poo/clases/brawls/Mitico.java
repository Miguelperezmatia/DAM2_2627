package tema_1._05_poo.clases.brawls;

public class Mitico extends Brawler {


    public Mitico(String nombre, int vida)
    {
        super(nombre, vida);
    }

    @Override
    public void atacar()
    {
        System.out.printf("%s con %d de vida de tipo mítico atacando%n", nombre, vida);
    }
}
