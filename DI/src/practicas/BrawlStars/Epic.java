package practicas.BrawlStars;

    //  Clase que hereda de la clase Brawler
public class Epic extends Brawler
{
    /*
        Atributo único de esta clase (por ello no lo escribimos en la clase Brawler)
        Representa la cantidad de salud que puede autoincrementarse el objeto
    */
    private int supplies;

    /*
       Constructor que sirve para crear objetos pasándole valores concretos a los parámetros
       super() llama al constructor de la clase padre, en este caso la clase Brawler para asignar valores a los atributos comunes
    */
    public Epic(String name, int health, int supplies)
    {
        super(name, health);
        this.supplies = supplies;
    }

    //  Metodo getter para obtener el valor del atributo
    public int getSupplies()
    {
        return supplies;
    }

    /*
        Metodo sobreescrito que aumenta la salud del propio objeto que invoque al metodo utilizando sus suministros (atributo supplies)
        Estamos especificando el cuerpo del metodo abstracto de la clase padre y se llama al metodo increaseHealth(int supply) de dicha clase
    */
    @Override
    public Brawler actionByCategory(Brawler enemy)
    {
        return this.increaseHealth(supplies);
    }
}