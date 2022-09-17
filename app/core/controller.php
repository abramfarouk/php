<?php



namespace MVC\core;



class controller {


    public function view($path,$parm){
        extract($parm);

        require_once(VIEWS.$path.".php");

    }

 
}














?>