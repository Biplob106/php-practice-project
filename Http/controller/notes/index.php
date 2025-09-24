<?php 
use Core\App;
use Core\Database;

$db= App::resolve(Database::class);
//var_dump($db);
$notes = $db->query("SELECT * FROM notes")->fetchAll();
view('notes/index.view.php',

[

    'heading' => 'All Notes',
    'notes' => $notes
    
]
);