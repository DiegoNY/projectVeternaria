from account  import Account

class Asesor(Account):
    id = int

    def __init__(self, document, email, password) -> None:
        super().__init__(document, email, password)
