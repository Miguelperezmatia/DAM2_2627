import java.util.ArrayList;

public abstract class User
{
    private String username;
    private String password;

    public User(String username, String password)
    {
        this.username = username;
        this.password = password;
    }

    public String getUsername()
    {
        return username;
    }

    public boolean comprobarInicioSesion(String username, String password)
    {
        return this.username.equals(username) && this.password.equals(password);
    }

    public abstract void actionByUser(ArrayList<User> users);
}
