<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

$email    = $_POST['email'];
$password = $_POST['password'];
$errors   = [];

$form = new LoginForm();
if ($form->validate($email, $password)) {

    $auth = new Authenticator;

    if ($auth->attempt($email, $password)) {
        redirect('/');
        
    } 
        $form->error('email', 'No Matching Email Account Found for this email address');
    
}

Session::flash('errors',$form->errors());
Session::flash('old',[ 'email' => $_POST['email']]);


return redirect('/login');