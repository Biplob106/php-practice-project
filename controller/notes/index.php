<?php 

use Core\Database;

require base_path('Core/Database.php');    
$config= require base_path('config.php');

$db = new Database($config['database']);
//var_dump($db);
$notes = $db->query("SELECT * FROM notes")->fetchAll();
view('notes/index.view.php',

[

    'heading' => 'All Notes',
    'notes' => $notes
    
]
);