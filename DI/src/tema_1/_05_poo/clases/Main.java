package tema_1._05_poo.clases;

import tema_1._05_poo.clases.brawls.Brawler;
import tema_1._05_poo.clases.brawls.Epico;
import tema_1._05_poo.clases.brawls.Legendario;
import tema_1._05_poo.clases.brawls.Mitico;

import java.util.ArrayList;

public class Main
{
    public static void main(String[] args)
    {
        Persona p = new Persona("Miguel", 24);
        p.greet();

        Animal a = new Animal("Mike");
        a.eat();

        Perro perro = new Perro("Chufly");
        perro.eat();
        perro.ladrar();

        //  CLASE
        Arma pistola = new Pistola();
        Arma fusil = new Fusil();

        ArrayList<Arma> armas = new ArrayList<>();

        armas.add(pistola);
        armas.add(fusil);

        for(Arma arma : armas)
            arma.disparar();

        Brawler legendario1 = new Legendario();
        Brawler legendario2 = new Legendario();

        Brawler epico1 = new Epico();
        Brawler epico2 = new Epico();

        Brawler mitico1 = new Mitico();
        Brawler mitico2 = new Mitico();

        ArrayList<Brawler> brawlers = new ArrayList<>();
        brawlers.add(legendario1);
        brawlers.add(legendario2);
        brawlers.add(epico1);
        brawlers.add(epico2);
        brawlers.add(mitico1);
        brawlers.add(mitico2);

        for(Brawler b: brawlers)
        {
            b.atacar();
            b.defender();
        }
    }
}
