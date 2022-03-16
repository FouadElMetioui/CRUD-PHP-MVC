<?php
 require_once 'ControllerEtudiant.php'; 
 require_once 'View/view.php';

 class Route{
 private $ctrlEtudiant;
 public function __construct() {
    $this->ctrletudiant = new ControllerEtudiant(); 
}
public function routeRequest() { 
try {
        if (isset($_GET['action'])) {

                if ($_GET['action'] == 'afficher') {
                            $this->ctrletudiant->afficher(); 
                }
               
                else if ($_GET['action'] == 'supprimer') {
                        
                         $this->ctrletudiant-> supprimer($_GET['id']) ;
                         
                 }
                 else if ($_GET['action'] == 'modifier') {
                        // die($_GET['id']);
                         $this->ctrletudiant->modifier($_GET['id']) ;
                 }
                 else if ($_GET['action'] == 'ajouter') {
                        // die($_GET['id']);
                         $this->ctrletudiant->ajouter() ;
                 }
                else {
                        throw new Exception("Action not valid");
                } 
        }else{
                throw new Exception("");
        } 
}catch (Exception $e) {

        $this->erreur($e->getMessage()); 
}
 }
   // Affiche une erreur
 private function erreur($msgErreur) {

 $view = new View("Error"); 
 $view->generate(array('msgErreur' => $msgErreur));
 } 
}