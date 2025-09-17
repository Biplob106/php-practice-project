<?php 

$heading= 'note';
require_once 'Database.php' ;
$config= require('config.php');


$db= new Database($config['database']);
//$id=$_GET['id'];
//var_dump($id);

$currentUserId = 1;
$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();


authorize($note['user_id'] === $currentUserId);




require ('view/note.view.php');