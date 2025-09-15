<?php

function    isActive($path){
    
   $link = $_SERVER['REQUEST_URI'] === $path ? 'bg-red-900' : '';
   echo $link;
}
?>