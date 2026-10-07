package tema_1._05_poo.clases.simulacro_3;

import java.util.ArrayList;

public abstract class Vehiculo
{
    private String id;
    private int bateria;

    public String getId() {
        return id;
    }

    public int getBateria() {
        return bateria;
    }

    public Vehiculo(String id, int bateria) {
        this.id = id;
        this.bateria = bateria;
    }

    @Override
    public String toString()
    {
        return "[ID: " + id + ", Batería: " + bateria + "%]";
    }

    public abstract void actionByVehicle(int minutos);
}
