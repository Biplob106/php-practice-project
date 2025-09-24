<?php

use Core\App;
use Core\Database;
use Http\Forms\LoginForm;

//session_start();

//dd($_SESSION);
$db       = App::resolve(Database::class);
$email    = $_POST['email'];
$password = $_POST['password'];

//validate the form input

$form = new LoginForm;
if (! $form->validate($email, $password)) {
    return view('registration/create.view.php', [
        'errors' => $errors,
    ]);
}

//check if the account already exists

$user = $db->query('select * from users where email= :email', [
    'email' => $email,
])->find();

//if yes , redirect to login page
if ($user) {

    header('location: /');
} else {
    $db->query(
        'INSERT INTO users(email,password) VALUES(:email,:password)',
        [
            'email'    => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT),

        ]
    );

    $user = $db->query('select * from users where email= :email', [
        'email' => $email,
    ])->find();

  

}
//if no,save to database then log and redirect the user