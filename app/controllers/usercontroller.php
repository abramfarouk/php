<?php


namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\user;
use GUMP;
use MVC\core\Session;




  class usercontroller extends controller  {
   
    public function __construct()
    {
        Session::Start();
       $data_user= Session::Get('user');
       if(empty($data_user)){
        echo "class not access";
       }

    }

    public function index(){
        echo "user";
    }

    public function add(){

        echo("abram farouk");



    }

    


  }



?>