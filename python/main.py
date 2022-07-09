from animal import Animal 

if __name__ == "__main__" :
    print("Animales en Adopcion 🐶")
    animal = Animal("Darlyne",55)
    # animal.id = 1
    # animal.nombre = "Perrito"
    # animal.peso = 8.5
    # animal.talla = 15
    print(vars(animal))

    animal1 = Animal("Diego",63)
    # animal1.id = 1
    # animal1.nombre = "Perro2"
    # animal1.peso = 7
    # animal1.talla = 12
    print(vars(animal1))

