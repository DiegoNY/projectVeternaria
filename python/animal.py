from tokenize import Double
import pkg_resources


class Animal :
    id      = int 
    nombre  = str
    raza    = []
    peso    = float
    talla   = int
    
    def __init__(self, nombre,peso):
        self.nombre = nombre
        self.peso = peso 
        
        
