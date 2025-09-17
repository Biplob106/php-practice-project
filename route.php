<?php

$route= require('routes.php');


$uri= parse_url($_SERVER['REQUEST_URI'])['path'];


/*
$uri= $_SERVER['REQUEST_URI'];


if($uri === '/')
{
    require ('controller/index.php');
    
}
elseif($uri === '/team')
{
    require('controller/team.php');
}
elseif($uri === '/projects')
{
    require('controller/projects.php');
}
elseif($uri === '/calendar')
{
    require('controller/calendar.php');
}
elseif($uri === '/report')
{
    require('controller/report.php');
}

*/



if(array_key_exists($uri, $route))
{
    require ($route[$uri]);
} 
else {
    http_response_code(404);
    
    echo 'Sorry ,not found';
}


?>