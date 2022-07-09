 class Main {
    public static void main(String[] args) {
        System.out.println("holaa");
        Animal animal = new Animal("Diego");
        animal.id = 1;
        animal.peso = 15.0;
        animal.talla = 80;
        //sin reutilizar codigo mala practica uu no es poo
        //System.out.println("Identificador : " +animal.id +"\n"+ " Nombre : " + animal.nombre + "Peso  :" + animal.peso + "Talla   : " + animal.talla);
        //ahora si :3
        animal.printDataAnimal();
        
        Animal animal2 = new Animal("Roberto");
        animal2.id = 1;
        animal2.peso = 15.0;
        animal2.talla = 80;
        //reutilizando codigo es bueno good uwu
        animal2.printDataAnimal();

    }
}