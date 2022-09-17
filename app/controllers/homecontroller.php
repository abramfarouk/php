<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\user;
use GUMP;
use MVC\core\Session;
use MVC\core\helpers;




  class homecontroller extends controller  {

    public function __construct()
    {
      Session::Start();
    }



 public function index(){


            $user = new user();
            $data =$user->Getallusers();

         $title= "home index";
         $h1="abram farouk";
    $this->view("home/index" ,['title'=>$title ,'h1'=>$h1,'data'=>$data]);

    

 }

 
public function add(){
    echo "hello world";

}

public function login(){


  $this->view("home/login" ,['title'=>'login']);
}

public function postlogin(){

$v = GUMP::is_valid($_POST,[ 
   'email'=>'required'

]);



if($v ==1){
    
  $user = new user();
  $data =$user->getuser($_POST['email'],$_POST['password']);
  echo '<pre>' ;
  print_r($data);

  Session::Set('user',$data);
  helpers::redirect('user/index');  
}

}

public function logout(){

  Session::Stop();
}

}
// Getuser


