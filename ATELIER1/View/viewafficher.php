<?php $this->title = "AFFICHAGE"; ?>
<?php 

?>
 


<style type="text/css">

body {
font-family: 'Source Sans Pro', sans-serif;
font-size: 14px;
color: #787D80;
letter-spacing: .2px;
}

.container {
width: 950px;
margin: auto;
}

    
table {
width: 100%;
}

th, td {
padding-top: 15px;
padding-bottom: 15px;
padding-left: 15px;
}

th {
text-align: center;
background-color: #F2F2F2;
color: #65696B;
}





.talk {
text-transfor: uppercase;
font-size: 24px;
}

.active {
background-color: gray;
color: white;
}
a{
    text-decoration: none;
    
}

 #delete{
    color:red;
}
</style>
<!-- #################################################### HTML ##############################################  --> 

<div class="container">

  <table border="0" >
    <div style="height: 50px ">
    
    </div>
      <tr class="table-header">
        <th style="font-size: 1.2em" >Nom</th>
        <th style="font-size: 1.2em">Prenom</th>
        <th style="font-size: 1.2em">Age</th>
        <th style="font-size: 1.2em">Cne</th>
        <th style="font-size: 1.2em"> Action</th>
      </tr>


          <?php
          foreach ($etudiants as $etudiant): 
          
              ?>
              <tr >
              <td style="text-align:center"><?php echo $etudiant->getNom()?> </td> 
              <td style="text-align:center"><?php echo $etudiant->getPrenom()?> </td>
              <td style="text-align:center"><?php echo $etudiant->getAge()?> </td>
              <td style="text-align:center"><?php echo $etudiant->getCne()?> </td>
              <td style="text-align:center">
              <a href="<?= "index.php?action=modifier&id=" . $etudiant->getId(); ?>"   style="margin-right: 15px" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Modifier</a>
             
              <a class="btn btn-danger" href="<?= "index.php?action=supprimer&id=" . $etudiant->getId(); ?>" role="button">Supprimer</a>
              </td>
              </tr>
              <?php endforeach;?>
      
    </table>
 </div>
       