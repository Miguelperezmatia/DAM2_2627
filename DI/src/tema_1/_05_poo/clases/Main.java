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

        Legendario legendario1 = new Legendario(100,"spike");
        Legendario legendario2 = new Legendario(50,"leon");

        Epico epico1 = new Epico(130,"tara");
        Epico epico2 = new Epico(150,"byron");

        Mitico mitico1 = new Mitico(105,"bo");
        Mitico mitico2 = new Mitico(300,"genio");

        ArrayList<Brawler> brawlers = new ArrayList<>();
        brawlers.add(legendario1);
        brawlers.add(legendario2);
        brawlers.add(epico1);
        brawlers.add(epico2);
        brawlers.add(mitico1);
        brawlers.add(mitico2);

        for(Brawler b: brawlers)
            b.atacar();

    }
}
