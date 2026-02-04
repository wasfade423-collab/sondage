<?php
    class Model{
        private $database;
        public function __construct(){
            $this->database = new PDO('mysql:host=localhost; dbname=afrika; charset = utf8', 'root', '');
        }
    }
?>