<?php 


require('../Core/function.php');


spl_autoload_register(function($class) 
{
    
    require base_path("{$class}.php");

});  


require base_path('Core/route.php' );




?>