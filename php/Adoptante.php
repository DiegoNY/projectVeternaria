<?php
require 'acoount.php';
class Adoptante extends Account{
    public $id;
    public function __construct($id,$name,$document,$email,$password)
    {
        parent:: __construct($name,$document,$email,$password);
        $this->id = $id;
    }
}