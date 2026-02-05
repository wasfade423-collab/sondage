<?php
    include "model/model.php";
    class Controller{
        private $model;
        public function __construct(){
            $this->model = new Model();
        }
        public function control(){

            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['age']) && !empty($_POST['age'])){
                    $age = $_POST['age'];
                }
                if(isset($_POST['sexe']) && !empty($_POST['sexe'])){
                    $sexe = $_POST['sexe'];
                }
                if(isset($_POST['secteurActivite']) && !empty($_POST['secteurActivite'])){
                    $secteurActivite = $_POST['secteurActivite'];
                }
                if(isset($_POST['PayVil']) && !empty($_POST['PayVil'])){
                    $payvil = $_POST['PayVil'];
                }
                if(isset($_GET['action']))
                    {
                        $action=$_GET['action'];
                    }
                else
                    {
                     $action="login";   
                    }
                switch($action)
                {
                    case'form':
                        $this->form();
                    break;
                    case'login':
                     $this->login();
                     break;
                    default:
                    break;
                    
                }
            }
        }
        private function form()
        {
           include("vue/login.php");
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $nameEnq=trim(htmlspecialchars($_GET['nomEnqt']));
                $nomQuest=trim(htmlspecialchars($_GET['nomQuest']));
                $prenomQuest=trim(htmlspecialchars($_GET['prenomQuest']));
                  if(!empty($nameEnq)&&!empty($nameEnq)&&!empty($nameEnq))
                    {
                        
                        $connet=$this->model->createLogin();
                    }
            
            }
        }
        private function login()
        {

        }
    }
?>