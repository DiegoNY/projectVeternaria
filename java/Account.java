
class Account {
    Integer id;
    String name;
    Integer document;
    Integer fone;
    String email;
    String password;

    //Metodo
    public  Account(Integer document,String email,String password) {
        this.document = document;
        this.email = email;
        this.password = password;  
    }
}