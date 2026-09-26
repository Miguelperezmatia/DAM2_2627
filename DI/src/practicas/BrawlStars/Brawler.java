package practicas.BrawlStars;

//  Clase abstracta de la que heredarán otras clases
public abstract class Brawler
{
    //  Atributos privados para mantener el principio de encapsulamiento
    private String name;
    private int health;

    //  Constructor que sirve para crear objetos pasándole valores concretos a los parámetros
    public Brawler(String name, int health)
    {
        this.name = name;
        this.health = health;
    }

    //  Métodos getter para obtener los valores de los atributos
    public String getName()
    {
        return name;
    }
    public int getHealth()
    {
        return health;
    }

    //  Metodo sobreescrito que devuelve un String compuesto de los valores de los dos atributos entre corchetes
    @Override
    public String toString()
    {
        return "[" + name + ":" + health + "]";
    }

    /*
        Metodo que incrementa la salud del propio objeto
        Recibe un parámetro de tipo int que es la cantidad de salud que se va a autoincrementar
     */
    public Brawler increaseHealth(int supply)
    {
        this.health += supply;
        return this;
    }

    /*
        Metodo que reduce la salud del propio objeto
        Recibe un parámetro de tipo int que es la cantidad de salud que va a disminuir
    */
    public Brawler reduceHealth(int damage)
    {
        this.health -= damage;
        return this;
    }

    /*
        Metodo abstracto que realizará una acción dependiendo del tipo de Brawler que sea el objeto pasado por parámetro
        Devuelve el propio objeto (también podría no devolver nada (escribiendo void) si se quisiera cambiar)
        Es abstracto porque no tiene cuerpo; el cuerpo será implementado en las clases hijas
    */
    public abstract Brawler actionByCategory(Brawler brawler);
}