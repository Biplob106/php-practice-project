<?php

use Core\Database;
use Core\Validation;
use Core\App;


$db= App::resolve(Database::class);

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