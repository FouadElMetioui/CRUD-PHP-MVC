<?php
class EtudiantTransaction {
private $db; 
public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=dbcrud;charset=utf8', 'root', ''); 
}
public function add($etud) {
    $q = $this->db->prepare("INSERT INTO etudiant (nom, prenom, age,cne) VALUES(:nom, :prenom, :age , :cne )");
    $q->bindValue(':nom', $etud->getNom()); 
    $q->bindValue(':prenom', $etud->getPrenom() ); 
    $q->bindValue(':age', $etud->getAge());
    $q->bindValue(':cne', $etud->getCne() ); 
    $q->execute(); 
    //header('location:http://localhost/atelier1/index.php?action=afficher');
}
public function delete($id) {
    $this->db->exec('DELETE FROM etudiant WHERE id_etudiant = '.$id); 
}
public function getList() {
 
    $etuds = [];
    $q = $this->db->query('SELECT * FROM etudiant ORDER BY nom');
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
       // die($donnees['nom']);
         $p = new Etudiant($donnees['nom'] , $donnees['prenom'] , $donnees['age'] ,$donnees['cne'] , $donnees['id_etudiant']);

         array_push($etuds , $p);
        //$persos.push($p) ; 
    }
return $etuds; 
}
public function update($etud) {
    $q = $this->db->prepare('UPDATE etudiant SET nom = :nom, prenom = :prenom, age = :age ,cne=:cne WHERE id_etudiant = :id_etudiant');
    $q->bindValue(':nom', $etud->getNom() );
    $q->bindValue(':prenom',$etud->getPrenom());
    $q->bindValue(':cne', $etud->getCne());
    $q->bindValue(':age', $etud->getAge(), PDO::PARAM_INT);
    $q->bindValue(':id_etudiant', $etud->getId());
    $q->execute(); 
    
}
public function setDb(PDO $db) {
    $this->db = $db; 
}
}
?>