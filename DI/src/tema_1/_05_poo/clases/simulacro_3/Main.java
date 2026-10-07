package tema_1._05_poo.clases.simulacro_3;

import java.util.ArrayList;

import static tema_1._05_poo.clases.simulacro_3.Utilidades.readInt;
import static tema_1._05_poo.clases.simulacro_3.Utilidades.readString;

public class Main
{
    private static final ArrayList<Vehiculo> VEHICULOS = new ArrayList<>();

    public static void main(String[] args)
    {
        int option = 0;
        
        while(true) 
        {
            mostrarMenu();
            option = readInt("OPCIÓN: ");
            System.out.println();
            
            if(option == 5)
                break;
            else if(option == 1)
                listarFlota(VEHICULOS);
            else if(option == 2)
                crearPatinete(VEHICULOS);
            else if(option == 3)
                crearMoto(VEHICULOS);
            else if(option == 4)
                simularViaje(VEHICULOS);
        }
    }

    private static void simularViaje(ArrayList<Vehiculo> vehiculos)
    {
        System.out.println("--- SIMULAR VIAJE ---");
        String id = readString("ID del vehiculo: ");
        Vehiculo vehiculo = encontrarVehiculo(id, vehiculos);

        if(vehiculo == null)
        {
            System.out.println("Vehículo no encontrado en el repositorio.\n");
            return;
        }

        int minutos = readInt("MINUTOS: ");
        vehiculo.actionByVehicle(minutos);
    }

    private static Vehiculo encontrarVehiculo(String id, ArrayList<Vehiculo> vehiculos)
    {
        for(Vehiculo vehiculo: vehiculos)
        {
            if(id.equals(vehiculo.getId()))
                return vehiculo;
        }

        return null;
    }

    private static void crearMoto(ArrayList<Vehiculo> vehiculos)
    {
        System.out.println("--- NUEVA MOTO ---");
        String id = readString("Id: ");
        int bateria = readInt("Batería inicial (%): ");

        vehiculos.add(new Moto(id, bateria));
        System.out.printf("MOTO [%s] añadido correctamente al repositorio.%n%n", id);
    }

    private static void crearPatinete(ArrayList<Vehiculo> vehiculos)
    {
        System.out.println("--- NUEVO PATINETE ---");
        String id = readString("Id: ");
        int bateria = readInt("Batería inicial (%): ");

        vehiculos.add(new Patinete(id, bateria));
        System.out.printf("PATIENTE [%s] añadido correctamente al repositorio.%n%n", id);
    }

    private static void listarFlota(ArrayList<Vehiculo> vehiculos)
    {
        if(vehiculos.isEmpty())
        {
            System.out.println("La flota está vacía.\n");
            return;
        }

        for(Vehiculo vehiculo:vehiculos)
            System.out.println(vehiculo.toString());

        System.out.println();
    }


    private static void mostrarMenu()
    {
        System.out.println("--- SISTEMA DE GESTIÓN DE FLOTA ECOMAD ---\n1. Listar flota\n2. Añadir Patinete\n3. Añadir Moto\n4. Simular Viaje\n5. Salir");
    }
}
