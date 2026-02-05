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
                if(isset($_GET['action'])){ $action=$_GET['action'];}
                else{$action="login";}
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
        private function login()
        {
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $nameEnq=$this->verification($_POST['nomEnqt']);
                $nomQuest=$this->verification($_POST['nomQuest']);
                $prenomQuest=$this->verification($_POST['prenomQuest']);
                  if(!empty($nameEnq)&&!empty($nameEnq)&&!empty($nameEnq))
                    {
                        
                        $connet=$this->model->createLogin($nameEnq,$nomQuest,$prenomQues);
                        if($connet){
                            header('Location : index.php?action="form');
                            exit;
                        }
                    }
            }
            include("vue/login.php");
        }
        private function form()
        {   
            if($_SERVER['REQUEST_METHOD'] == "POST"){
              $old=$this->verification($_POST['age']);
              $sexe=$this->verification($_POST['sexe']);
              $secteurActivite=$this->verification($_POST['secteurActivite']);
              $PayVil=$this->verification($_POST['PayVil']);
              $AvenirFinancier=$this->verification($_POST['AvenirFinancier']);
              $vivreRetraire=$this->verification($_POST['vivreRetraire']);
              $AvenirEpagne=$this->verification($_POST['AvenirEpagne']);
              $KnownInvest=$this->verification($_POST['KnownInvest']);
              $eft=$this->verification($_POST['eft']);
              $interet=$this->verification($_POST['interet']);
              $invfin=$this->verification($_POST['invfin']);
              $ETF=$this->verification($_POST['ETF']);
              $invsimple=$this->verification($_POST['invsimple']);
              $invpsomme=$this->verification($_POST['invpsomme']);
              $fréquence=$this->verification($_POST['fréquence']);
            }

            include("vue/login.php");
        }
        private function verification($data){
            return trim(htmlspecialchars($data));
        }
    }
?>