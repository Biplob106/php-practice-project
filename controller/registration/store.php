<?php

use Core\Validation;
use Core\App;
use Core\Database;

 $email= $_POST['email'];
 $password= $_POST['password'];

 //validate the form input

$errors=[];
 if(!Validation::email($email))
 {
    $errors['email']='please provide a valid email address';
    
 }

 if(!Validation::string($password,7,255))
 {

    $errors['password']='please provide a password atleast seveen diggit';
 }
 if(!empty($errors)){

    return view('registration/create.view.php',[
        'errors'=>$errors
    ]);
 }

 $db=App::resolve(Database::class);
 
 
 //check if the account already exists

 $user=$db->query('select * from users where email= :email',[
    'email'=> $email,
 ])->find();
 
        //if yes , redirect to login page
if($user){
        
    header('location: /');
}else{
    $db->query('INSERT INTO users(email,password) VALUES(:email,:password)',
[
    'email'=> $email,
    'password'=>$password

]);

$_SESSION['user']=[
    'email'=>$eamil,
];
 header('Location','/');
 exit();

}
        //if no,save to database then log and redirect the user 