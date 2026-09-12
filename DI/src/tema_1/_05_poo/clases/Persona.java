package tema_1._05_poo.clases;

public class Persona
{
    //  Atributos

    private String name;
    private int age;

    //  Constructor

    public Persona(String name, int age)
    {
        setName(name);
        setAge(age);
    }


    //  Métodos

    public String getName()
    {
        return name;
    }

    public int getAge()
    {
        return age;
    }

    public void setName(String name)
    {
        this.name = name;
        if(name.isEmpty())
            throw new IllegalArgumentException("El nombre no puede ser vacío");
    }

    public void setAge(int age)
    {
        this.age = age;
        if (age < 0)
            throw new IllegalArgumentException("La edad no puede ser negativa");
    }

    public void greet()
    {
        System.out.println("Hola, soy " + this.name + " y tengo " + this.age + " años");
    }
}
