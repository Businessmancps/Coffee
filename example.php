<?php
$object    = new Subscriber;
$object->name ="Peto";
$object->password="pword";
$object->phone="000 000 0000";
$object->email="daniel@example.com";

$object->display();
class User{
  public $name ,$password;
  function save_user()
  {
    echo "User code goes here";

  }


}

class Subscriber extends user{
  public $phone, $email;

  function display(){
    echo "Name: " .$this->name."<br>";
    echo "Pass:" .$this->password."<br>";
    echo "Phone" .$this->phone."<br>";
    echo "Email:" .$this->email."<br>";
  }
}

 ?>
