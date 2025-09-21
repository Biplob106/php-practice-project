<?php

$router->get('/', 'index.php');
$router->get('/team', 'team.php');
$router->get('/projects', 'projects.php');
$router->get('/calendar', 'calendar.php');
$router->get('/report', 'report.php');
$router->get('/notes', 'notes/index.php');
$router->get('/note', 'notes/show.php');
$router->get('/notes/create', 'notes/create.php');
$router->post('/notes', 'notes/store.php');
$router->delete('/note', 'notes/destroy.php');
$router->get('/note/edit','notes/edit.php');
$router->patch('/note','notes/update.php');
$router->get('/register','registration/create.php');
$router->post('/register','registration/store.php');