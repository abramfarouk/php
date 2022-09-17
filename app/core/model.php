<?php

namespace MVC\core ;

use Dcblogdev\PdoWrapper\Database ;


class model{


   public function db(){
        // make a connection to mysql here
    $options = [
        //required
        'username' => 'root',
        'database' => 'proone_1',
        //optional
        'password' => '',
        'type' => 'mysql',
        'charset' => 'utf8',
        'host' => 'localhost',
        'port' => '3306'
    ];
    
     return $db = new Database($options);
    
    
    }





}












?>