import java.util.ArrayList;

public class Main
{
    private static final ArrayList<Vehiculo> VEHICULOS = new ArrayList<>();

    public static void main(String[] args)
    {
        /*
        VEHICULOS.add( new Coche("Ford", 430000, "blanco"));
        VEHICULOS.add(new Furgoneta("Opel", 100000));
        VEHICULOS.add( new Coche("BMW", 20000, "rojo"));
        */


        int opcion;

        while(true)
        {
            menu();
            opcion = Utilidades.readInt("OPCIÓN: ");
            System.out.println();

            if(opcion == 4)
                break;
            else if(opcion == 1)
                verVehiculos(VEHICULOS);
            else if(opcion == 2)
                crearCoche(VEHICULOS);
            else if(opcion == 3)
                conducir(VEHICULOS);
            else
                System.out.println("Opción inválida");
        }
    }

    private static void conducir(ArrayList<Vehiculo> vehiculos)
    {
        if(vehiculos.isEmpty())
        {
            System.out.println("Aún no hay vehículos, por lo que no se puede conducir ningún vehículo por marca.\n");
            return;
        }

        String marca = Utilidades.readString("Marca a buscar: ");

        for(Vehiculo vehiculo: vehiculos)
        {
            if(!vehiculo.getMarca().equals(marca))
            {
                System.out.printf("No hay ningún vehículo con la marca %s%n%n", marca);
                return;
            }
        }

        for(Vehiculo vehiculo: vehiculos)
        {
            if(vehiculo.getMarca().equals(marca))
                vehiculo.conducir(vehiculo);
        }

        System.out.println();
    }

    private static void crearCoche(ArrayList<Vehiculo> vehiculos)
    {

        String marca = Utilidades.readString("Marca del coche: ");
        int numeroKilometros = Utilidades.readInt("Kilómetros del coche: ");
        String color = Utilidades.readString("Color: ");

        Coche coche = new Coche(marca,numeroKilometros,color);
        vehiculos.add(coche);
        System.out.println();
    }

    private static void verVehiculos(ArrayList<Vehiculo> vehiculos)
    {
        if(vehiculos.isEmpty())
        {
            System.out.println("Aún no hay vehículos.\n");
            return;
        }

        for(Vehiculo vehiculo:vehiculos)
            System.out.println(vehiculo.toString());

        System.out.println();
    }


    private static void menu()
    {
        System.out.println("1. Ver vehículos\n2. Crear coche\n3. Conducir vehículo por marca\n4. Salir");
    }
}
