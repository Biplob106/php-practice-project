<?php 

$heading= 'notes';
require 'Database.php';    
$config= require('config.php');

$db = new Database($config['database']);
//var_dump($db);
$notes = $db->query("SELECT * FROM notes")->fetchAll();
require 'view/notes/index.view.php';