<?php 

$heading= 'note';
require_once 'Database.php' ;
$config= require('config.php');

$db= new Database($config['database']);
//$id=$_GET['id'];
//var_dump($id);

$note = $db->query("SELECT * FROM notes WHERE id =:id",['id'=> $_GET['id']])->fetch();



require ('view/note.view.php');