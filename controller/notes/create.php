<?php 

$heading= 'note Create';
$config= require base_path('config.php');
require_once base_path('Database.php');
require base_path('Validation.php');
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



require base_path('view/notes/create.view.php');

?>