<?php
require_once 'Model/etudiant.php'; 
require_once 'Model/etudiantTransaction.php';
require_once 'View/view.php'; 
require_once 'Route.php'; 
class ControllerEtudiant {
private $etudiant ;
private $etudiantTransaction;
public function __construct(){
    $this->etudiant = new Etudiant();
    $this->etudiantTransaction = new EtudiantTransaction(); 
}
public function afficher() {
    $etudiants = $this->etudiantTransaction->getList(); 
    $view = new View("afficher"); 
    $view->generate(array('etudiants' => $etudiants));
} 
public function ajouter() {
    $view = new View("ajouter"); 
    $view->generer();
    $age='0';
    if( isset($_POST['save'])){
        if(isset($_POST['nom']))
                 $this->etudiant->setNom($_POST['nom']);
        if(isset($_POST['prenom']))
                 $this->etudiant->setPrenom($_POST['prenom']);
        if(isset($_POST['age'])){
                        $age=$_POST['age'];
                        $this->etudiant->setAge($age);
        }
                 if(isset($_POST['cne']))  
                     $this->etudiant->setCne($_POST['cne']);
        $this->etudiantTransaction->add($this->etudiant);
    }

} 
public function supprimer($id){
    $this->etudiantTransaction->delete($id); 
    $this->afficher();
}
public function modifier($id){
            $view = new View("modifier"); 
            $view->generer();
            $age='0';
       
            if(isset($_POST['save'])){
                $this->etudiant->setId($id);
                if(isset($_POST['nom']))
                $this->etudiant->setNom($_POST['nom']);
            if(isset($_POST['prenom']))
            $this->etudiant->setPrenom($_POST['prenom']);
            if(isset($_POST['age']))  {
                $age=$_POST['age'];
                $this->etudiant->setAge($age);}
            if(isset($_POST['cne']))  
            $this->etudiant->setCne($_POST['cne']);
               $this->etudiantTransaction->update($this->etudiant);  
}
}

    //  recuperer l'etudiant de la
    public function getEtudiant(){
        return $this->etudiant;
    }
}
