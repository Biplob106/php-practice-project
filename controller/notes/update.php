<?php 
use Core\App;
use Core\Database;  
use Core\Validation;

$db = App::resolve(Database::class);

$currentUserId = 1;

$errors = [];

// find the note
$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

// authorize
authorize($note['user_id'] === $currentUserId);

// validate
if (!Validation::string($_POST['body'], 1, 100)) {
    $errors['body'] = 'Body is required and must not exceed 100 characters.';
}

// if validation fails, return to view
if (!empty($errors)) {
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

// update the note
$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

// redirect
header('Location: /notes');
exit;