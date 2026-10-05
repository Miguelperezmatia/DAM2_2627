package tema_1._05_poo.clases.simulacro_2;

public abstract class Users
{
    private String username;
    private String password;

    public String getUsername()
    {
        return username;
    }

    public Users(String username, String password)
    {
        this.username = username;
        this.password = password;
    }

    public boolean isValidPassword(String username, String password)
    {
        return this.username.equals(username) && this.password.equals(password);
    }

    public abstract void actionByUser();
}
