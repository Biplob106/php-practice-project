<?php 

$heading= 'note Create';
$config= require('config.php');
require_once 'Database.php';
require 'Validation.php';
$db= new Database($config['database']);



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     
    $error= [];
    

    if(!Validation::string($_POST['body'],1,100)){
        $error['body'] = 'body is required , max 100 characters';
    }
    
    if(empty($error)){

        $db->query(
            "INSERT INTO notes (body, user_id) VALUES (:body, :user_id)", 
            [
                'body' => $_POST['body'],
                'user_id' => 1
            ]
        );
        
    }

    
        

     
}



require ('view/notes/create.view.php');

?>