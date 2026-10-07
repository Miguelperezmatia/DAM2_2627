public class Coche extends Vehiculo
{
    private String color;

    public Coche(String marca, int numeroKilometros, String color)
    {
        super(marca, numeroKilometros);
        this.color = color;
    }


    @Override
    public void conducir(Vehiculo vehiculo)
    {
        System.out.printf("Coche %s de color %s con %d kilómetros - Viajando%n", this.getMarca(), color, this.getNumeroKilometros());
    }
}
