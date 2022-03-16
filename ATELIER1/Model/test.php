<?php
require 'etudiant.php';
require 'etudiantTransaction.php';
$et=new Etudiant('achraf','elkrissi',20,'p12345');
$transa=new EtudiantTransaction();
$transa->add($et);
?>