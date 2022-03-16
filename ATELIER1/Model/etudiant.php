<?php
class Etudiant {
private $id_etudiant; 
private $nom; 
private $prenom; 
private $age;
private $cne ;
public function __construct  ($nom=NULL ,$prenom=NULL, $age=NULL,$cne=NULL , $id=NULL){ 
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->age =  $age; 
    $this->id_etudiant = $id ;
    $this->cne = $cne;
}

public function getId() {
    return $this->id_etudiant; 
}
public function getNom() {
    return $this->nom; 
}
public function getPrenom() {
    return $this->prenom; 
}
public function getAge() {
    return $this->age; 
}
public function getCne() {
    return $this->cne; 
}
public function setId($id) {
    $this->id_etudiant  = (int) $id; 
}

public function setNom($nom) {
    if (is_string($nom)) {
        $this->nom = $nom; 
    }
    
}

public function setPrenom($prenom) {
    if (is_string($prenom)) {

        $this->prenom = $prenom; 
    }
}
public function setAge($age) {
    $this->age = (int) $age; 
    
}
public function setCne($cne) {
    if (is_string($cne)) {
        $this->cne = $cne; 
    }
}  
} ?>