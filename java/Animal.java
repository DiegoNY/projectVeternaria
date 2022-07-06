import java.util.ArrayList;

public class Animal {
     int id;  
     String nombre; 
     ArrayList<String> raza;
     Double peso;
     int talla ; 

     void printDataAnimal()
     {
        System.out.println("Identificador  : " + id + "Nombre   : " + nombre + "Raza    : " + raza+ "Peso   : "+peso+ "Talla : " + talla);
     }
}