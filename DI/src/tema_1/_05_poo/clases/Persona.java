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
        if(name.isEmpty())
            throw new IllegalArgumentException("El nombre no puede ser vacío");

        this.name = name;
    }

    public void setAge(int age)
    {
        if (age < 0)
            throw new IllegalArgumentException("La edad no puede ser negativa");

        this.age = age;
    }

    public void greet()
    {
        System.out.println("Hola, soy " + name + " y tengo " + age + " años");
    }
}
