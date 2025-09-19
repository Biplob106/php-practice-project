<?php







function routeToController($uri, $routes)
{
    if(array_key_exists($uri, $routes))
    {
        require base_path($routes[$uri]);
    }
    else {
        http_response_code(404);
        
        echo 'Sorry ,not found';
    }
}

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

$route= require(base_path('routes.php'));


$uri= parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $route);


?>