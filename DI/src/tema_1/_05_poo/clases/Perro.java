package tema_1._05_poo.clases;

public class Perro extends Animal
{
    public Perro(String name)
    {
        super(name);
    }

    @Override
    public void eat() {
        System.out.println("El perro con nombre " + name + " está comiendo");
    }

    public void ladrar()
    {
        System.out.println(name + " Ladrando...");
    }
}
