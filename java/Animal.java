import java.util.ArrayList;

public class Animal {
     int id;  
     String nombre; 
     ArrayList<String> raza;
     Double peso;
     int talla ; 
                  //atributos 
                  //obligatorios
     public Animal(String nombre, ArrayList<String> raza){
         this.nombre= nombre;
         this.raza = raza;
     }
     
     void printDataAnimal()
     {
        System.out.println("Identificador  : " + id + "\n"+ "Nombre   : " + nombre + "\n"+ "Raza    : " + raza+ "\n"+"Peso   : "+peso +"\n"+ "Talla : " + talla);
     }
}