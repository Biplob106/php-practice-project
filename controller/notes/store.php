<?php

use Core\Database;
use Core\Validation;
$config= require base_path('config.php');
$db= new Database($config['database']);

$error= [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     
    
    

    if(!Validation::string($_POST['body'],1,100)){
        $error['body'] = 'body is required , max 100 characters';
    }
    
    if(!empty($error)){
        return view('notes/create.view.php',[
            'heading' => 'create note',
            'error' => $error   
        ]);
    }

        $db->query(
            "INSERT INTO notes (body, user_id) VALUES (:body, :user_id)", 
            [
                'body' => $_POST['body'],
                'user_id' => 1
            ]
        );

        header('location: /notes');
        exit;
        
    
     
}

?>