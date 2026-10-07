public class Furgoneta extends Vehiculo
{
    public Furgoneta(String marca, int numeroKilometros)
    {
        super(marca, numeroKilometros);
    }

    @Override
    public void conducir(Vehiculo vehiculo)
    {
        System.out.printf("Furgoneta %s con %d kilómetros - Transporta comida%n", this.getMarca(), this.getNumeroKilometros());
    }

}
