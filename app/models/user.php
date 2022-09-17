<?php

namespace MVC\models;
use MVC\core\model ;

class user extends model  {


public function Getallusers(){

    $data= model::db()->rows("select * FROM user");
    return $data ;


}
 
public function getuser($email,$password){

    $data= model::db()->row("select * FROM user WHERE `email` =? && `password`=?" ,[$email,$password]);
    return $data ;


}


}










?>