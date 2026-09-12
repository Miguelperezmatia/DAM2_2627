package tema_1._05_poo.clases;

public class Main
{
    public static void main(String[] args)
    {
        Persona p = new Persona("Miguel", 24);
        p.greet();

        Animal a = new Animal("Mike");
        a.eat();

        Perro perro = new Perro("Chufly");
        perro.eat();
        perro.ladrar();
    }
}
