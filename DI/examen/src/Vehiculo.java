public abstract class Vehiculo
{
    private String marca;
    private int numeroKilometros;

    public String getMarca()
    {
        return marca;
    }

    public int getNumeroKilometros()
    {
        return numeroKilometros;
    }

    public Vehiculo(String marca, int numeroKilometros)
    {
        this.marca = marca;
        this.numeroKilometros = numeroKilometros;
    }

    @Override
    public String toString()
    {
        return  marca + ":" + numeroKilometros + " km";
    }

    public abstract void conducir(Vehiculo vehiculo);
}
