package practicas;

public class Calculadora
{
    public static void main(String[] args)
    {
        mostrarOpciones();
    }

    private static void mostrarOpciones()
    {
        System.out.println("""
                OPCIÓN  ACCIÓN
                
                1       SUMAR
                2       RESTAR
                3       MULTIPLICAR
                4       DIVIDIR
                """);
        System.out.print("Elige una opción: ");
    }
}
