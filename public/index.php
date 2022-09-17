<?php
define("DS" ,DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__) .DS);
define("APP",ROOT.'app'.DS);
define("CONFIG",APP.'config'.DS);
define("CONTROLLORS",APP.'controllers'.DS);
define("CORE",APP.'core'.DS);
define("MODELS",APP.'models'.DS);
define("VIEWS",APP.'views'.DS);

//config
define("DOMAIN_NAME", "http://localhost:8080/fsmvc/public/");




require_once  ("../vendor/autoload.php");
$app= new MVC\core\app();

?>