<?php


use Core\App;
use Core\Database;
use Core\Validation;
$db = App::resolve(Database::class);
$email=$_POST['email'];
$password = $_POST['password'];
$errors=[];

if(!Validation::email($email)) {
    $errors['email'] = 'Please provide a valid email';
}
if(!Validation::string($password)) {
    $errors['password'] = 'Please provide a valid password';
}


$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if($user)
{
if(password_verify($password,$user['password'])){
    login([
        'email'=> $email
    ]);

    header('location:/');
}
    
}


return view('sessions/create.view.php',
[
    'errors'=>[
        'email'=>'No matching account found for this email'
    ]
]
);