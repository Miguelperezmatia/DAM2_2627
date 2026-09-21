package tema_1._05_poo.clases.brawls;

public class Legendario extends Brawler{

    public Legendario(String nombre, int vida)
    {
        super(nombre, vida);
    }

    @Override
    public void atacar()
    {
        System.out.printf("%s con %d de vida de tipo legendario atacando%n", nombre, vida);
    }


}
