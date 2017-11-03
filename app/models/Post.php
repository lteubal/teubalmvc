<?php
// Post Model

class Post {
    private $database;
    
    public function __construct() 
    {
        $this->database = new Database;        
    }
    // get results from posts
    public function getResults() {
        $this->database->prepare('select * from posts where id = :id');
        $this->database->execute(['id' => '1']);
        return $this->database->fetchAll();
    }
}