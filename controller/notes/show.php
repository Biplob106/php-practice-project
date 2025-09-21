<?php 


use Core\Database;  
use Core\App;



$db= App::resolve(Database::class);
//$id=$_GET['id'];
//var_dump($id);

 $note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

$currentUserId = 1;

authorize($note['user_id'] === $currentUserId);

view('notes/show.view.php',[
    'heading' => 'Single Note',
    'note' => $note
    
]);