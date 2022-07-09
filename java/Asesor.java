
public class Asesor extends Account {
    Integer id;

    public Asesor(Integer id,String name, Integer document, String email, String password)
    {
    super(name,document, email, password);
    this.id = id;
    }
}
