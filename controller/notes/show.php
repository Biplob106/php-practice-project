<?php 

require_once base_path('Database.php') ;
$config= require base_path('config.php');


$db= new Database($config['database']);
//$id=$_GET['id'];
//var_dump($id);

$currentUserId = 1;
$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();


authorize($note['user_id'] === $currentUserId);




view('notes/show.view.php',[
    'heading' => 'Single Note',
    'note' => $note
    
]);