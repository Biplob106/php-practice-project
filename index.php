<?php 

require('function.php');

require('route.php' );

require('database.php');

$db= new database();
$posts= $db->query("where * from posts " )->fetchAll(PDO::FETCH_ASSOC);




foreach($posts as $post){
    echo $post['title']."<br>";
}


?>