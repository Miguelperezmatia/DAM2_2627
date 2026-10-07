package tema_1._05_poo.clases.simulacro_3;

import java.util.ArrayList;

public class Moto extends Vehiculo
{

    public Moto(String id, int bateria) {
        super(id, bateria);
    }


    @Override
    public String toString()
    {
        return "- MOTO " + super.toString();
    }

    @Override
    public void actionByVehicle(int minutos)
    {
        double coste = calcularCoste(minutos);

        if(this.getBateria() < 15)
        {
            double costeTotal = coste - 2;
            System.out.printf("Coste del viaje: %5.2f euros. Detalle (%5.2f tiempo - 2.00 por descuento de baterian%n%n)", costeTotal, coste);
            return;
        }
        System.out.printf("Coste del viaje: %f%n%n)", coste);
    }

    private double calcularCoste(int minutos)
    {
        return 0.30 * minutos;
    }
}
