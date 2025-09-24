<?php

$router->get('/', 'index.php');
$router->get('/team', 'team.php')->only('auth');
$router->get('/projects', 'projects.php')->only('auth');
$router->get('/calendar', 'calendar.php')->only('auth');
$router->get('/report', 'report.php')->only('auth');
$router->get('/notes', 'notes/index.php')->only('auth');
$router->get('/note', 'notes/show.php');
$router->get('/notes/create', 'notes/create.php');
$router->post('/notes', 'notes/store.php');
$router->delete('/note', 'notes/destroy.php');
$router->get('/note/edit','notes/edit.php');
$router->patch('/note','notes/update.php');
$router->get('/register','registration/create.php')->only('guest');
$router->post('/register','registration/store.php');
$router->get('/login','sessions/create.php')->only('guest');
$router->post('/sessions','sessions/store.php');
$router->delete('/sessions','sessions/destroy.php')->only('auth');