package practicas.BrawlStars;

    //  Clase que hereda de la clase Brawler
public class Legendary extends Brawler
{
    //  Atributo único de esta clase (por ello no lo escribimos en la clase Brawler)
    private int damage ;

    /*
         Constructor que sirve para crear objetos pasándole valores concretos a los parámetros
         super() llama al constructor de la clase padre, en este caso la clase Brawler para asignar valores a los atributos comunes
    */
    public Legendary(String name, int health, int damage)
    {
        super(name, health);
        this.damage = damage;
    }

    //  Metodo getter para obtener el valor del atributo
    public int getDamage()
    {
        return damage;
    }

    /*
        Metodo sobreescrito que reduce la salud del objeto de tipo Brawler pasado por parámetro
        Estamos especificando el cuerpo del metodo abstracto de la clase padre y se llama al metodo reduceHealth(int damage) de dicha clase
    */
    @Override
    public Brawler actionByCategory(Brawler enemy)
    {
        return enemy.reduceHealth(damage);
    }
}
