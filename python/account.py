import email
from unicodedata import name
from xml.dom.minidom import Document


class Account :
    id          = int
    name        = str
    document    = str
    email       = str
    password    = str 

    def __init__(self, document,email,password) -> None:
        self.document = document
        self.email = email
        self.password = password