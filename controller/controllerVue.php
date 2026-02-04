<?php
    include "model/model.php";
    class Controller{
        private $model;
        public function __construct(){
            $this->model = new Model();
        }
        public function control(){
            if(empty($_GET)) include("vue/formulaires.php");
        }
    }
?>