import java.util.ArrayList;
import java.util.Set;

public class Animal {
     int id;  
     String nombre; 
     ArrayList<String> raza;
     Double peso;
     int talla ; 
                  //atributos 
                  //obligatorios
     public Animal(String nombre ){
         this.nombre= nombre;
     }
     
     void printDataAnimal()
     {
        System.out.println("Identificador  : " + id + "\n"+ "Nombre   : " + nombre + "\n"+ "Raza    : " + raza+ "\n"+"Peso   : "+peso +"\n"+ "Talla : " + talla);
     }
}