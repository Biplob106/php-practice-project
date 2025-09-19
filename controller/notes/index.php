<?php 

$heading= 'notes';
require base_path('Database.php');    
$config= require base_path('config.php');

$db = new Database($config['database']);
//var_dump($db);
$notes = $db->query("SELECT * FROM notes")->fetchAll();
require base_path('view/notes/index.view.php');