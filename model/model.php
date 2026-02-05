<?php
    class Model{
        private $database;
        public function __construct(){
            $this->database = new PDO('mysql:host=localhost; dbname=afrika; charset = utf8', 'root', '');
        }

        public function create(){
            $query = "INSERT INTO individus VALUES";
        }
       public function createlogin($nameEnq,$nomQuest,$prenomQues){
         $query="INSERT INTO livre ( nomEnqt , nomQuested , prenomQuested  ) VALUES (:nomEnqt , :nomQuested , :prenomQuested )";
        $stmt=$this->database->prepare($query);
       return $stmt->execute( [
            'nomEnqt'=>$nameEnq,
            'nomQuested'=>$nomQuest,
            'prenomQuested'=>$prenomQues]);
       }
    }
?>