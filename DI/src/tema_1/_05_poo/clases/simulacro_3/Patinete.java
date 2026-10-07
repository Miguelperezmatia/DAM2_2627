package tema_1._05_poo.clases.simulacro_3;

import java.util.ArrayList;

public class Patinete extends Vehiculo
{
    public Patinete(String id, int bateria)
    {
        super(id, bateria);
    }

    @Override
    public String toString()
    {
        return "- PATINETE " + super.toString();
    }

    @Override
    public void actionByVehicle(int minutos)
    {
        double coste = calcularCoste(minutos);
        double costeTotal = coste + 1;

        System.out.printf("Coste del viaje: %5.2f euros. Detalle (1.00 desbloqueo + %5.2f tiempo%n%n)", costeTotal, coste);
    }

    private double calcularCoste(int minutos)
    {

        return 0.15 * minutos;
    }
}
