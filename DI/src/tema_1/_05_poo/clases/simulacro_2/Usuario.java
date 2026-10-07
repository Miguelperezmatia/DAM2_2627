package tema_1._05_poo.clases.simulacro_2;

import java.util.ArrayList;

public abstract class Usuario
{
    private final String username;
    private final String password;

    public String getUsername()
    {
        return username;
    }

    public Usuario(String username, String password)
    {
        this.username = username;
        this.password = password;
    }

    public boolean isValidPassword(String username, String password)
    {
        return this.username.equals(username) && this.password.equals(password);
    }

    //  Tienes que deducir que hay que pasarle el Arraylist<Users>
    public abstract void actionByUser(ArrayList<Usuario> users);
}
