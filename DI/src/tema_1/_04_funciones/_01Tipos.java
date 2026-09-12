package tema_1._04_funciones;

public class _01Tipos
{
    public static void main(String[] args)
    {
        enviarEmail();

        enviarEmailUsuario("Juan");
        enviarEmailUsuario("Carlos", "Pago de bebidas");

        int resultado = sumar(9, 6);
    }

    //  Función con retorno y parámetros

    private static int sumar(int num, int num2)
    {
        return num + num2;
    }

    //  Funciones con parámetros sin retorno y sobrecarga

    private static void enviarEmailUsuario(String usuario)
    {
        System.out.println("Enviando email a " + usuario);
    }

    private static void enviarEmailUsuario(String usuario, String concepto)
    {
        System.out.println("Enviando email a " + usuario + " con concepto de " + concepto);
    }


    //  Función sin parámetros ni retorno

    private static void enviarEmail()
    {
        System.out.println("Enviando email...");
        System.out.println("Email enviado");
    }




}
