import java.util.ArrayList;

public class HistorialMedico extends Animal{
    Integer id ;
    ArrayList<String> typeVacunas;
    
    public HistorialMedico(Integer talla,String nombre, ArrayList<String> raza, ArrayList<String>typeVacunas, Double peso)
    {
       super(nombre, raza);
       this.typeVacunas = typeVacunas;
       super.peso = peso;
       super.talla = talla;
    }
}
