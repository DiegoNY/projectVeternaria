<?php
require 'account.php';
class Asesor extends Account{
  public $id;

  public function __construct($id,$names,$document,$email,$password)
  {
    parent:: __construct($names,$document,$email,$password);
    $this->id = $id;
  }
}