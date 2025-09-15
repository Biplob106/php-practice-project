<?php class database
{ 
    public $connection;
    public function __construct()
    {
            $dsn="mysql:host=localhost;port=3306;dbname=php_basic;user=root;charset=utf8";

            $this->connection=new PDO($dsn);
        
    }
    
   public function  query()
   {
        


    $statemet= $this->connection->prepare("SELECT * FROM posts");
    $statemet->execute();
    $posts= $statemet;
    
    return $posts;
   }
    
}