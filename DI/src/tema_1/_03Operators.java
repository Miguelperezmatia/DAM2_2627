package tema_1;

public class _03Operators
{
    public static void main(String[] args)
    {

        //  Operadores aritméricos

        int mynumber = 5;
        int myNumber2 = 3;

        System.out.println(mynumber + myNumber2);
        System.out.println(mynumber - myNumber2);
        System.out.println(mynumber * myNumber2);
        System.out.println(mynumber / myNumber2);
        System.out.println(mynumber % myNumber2);
        System.out.println((double) mynumber / myNumber2);  //  Para que nos de decimales hay que pasar a double

        //  Operadores de asignación

        mynumber = myNumber2 * 2;
        mynumber += 5;
        mynumber -= 5;
        mynumber *= 5;
        mynumber /= 5;

        //  Operadores de comparación

        System.out.println(mynumber == myNumber2);
        System.out.println(mynumber != myNumber2);
        System.out.println(mynumber > myNumber2);
        System.out.println(mynumber < myNumber2);
        System.out.println(mynumber >= myNumber2);
        System.out.println(mynumber <= myNumber2);

        //  Operadores lógicos

        System.out.println(true && true);
        System.out.println(true || true);
        System.out.println(!true);

        //  Unarios

        System.out.println();

    }
}
