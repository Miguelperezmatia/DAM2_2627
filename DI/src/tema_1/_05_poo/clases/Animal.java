package tema_1._05_poo.clases;

public class Animal
{
    protected String name;

    public Animal(String name)
    {
        this.name = name;
    }

    public void eat()
    {
        System.out.println("El animal " + name + " está comiendo");
    }
}
