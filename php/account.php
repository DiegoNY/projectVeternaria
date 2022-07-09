<?php
class Account {
    public $id;   
    public $names;   
    public $document;  
    public $email;  
    public $password;   

    public function __construct($names,$document,$email,$password)
    {
      
        $this->names = $names;
        $this->document = $document;
        $this->email = $email;
        $this->password = $password;
    }
} 