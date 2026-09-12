package tema_1._02Loops;

public class _03While
{
    public static void main(String[] args)
    {
        int i = 1;

        while(true)
        {
            System.out.println(i);

            if(i==10)
                break;

           i++;
        }

        System.out.println("Bucle terminado");
    }
}
