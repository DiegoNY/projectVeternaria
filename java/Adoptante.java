public class Adoptante extends Account {
    Integer id;

    public Adoptante(Integer id,String name, Integer document, String email, String password)
    {
    super(name,document, email, password);
    this.id = id;
    }
}
