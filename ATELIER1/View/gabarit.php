<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/bootstrap.min.css" /> 
<title><?=$title?></title>
    </head>
    <body>
        <div class="container">
<!--   ###############################        #####################3 -->

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
text-align: left;
background-color: #F2F2F2;
color: #65696B;
}
nav {
padding-left: 20px;
padding-right: 20px;
border-bottom: 1px solid #E9E9E9;
}
nav ul li {
display: inline-block;
font-weight: 600;
font-size: 16px;
text-transform: uppercase;
}

nav ul li {
text-align: center;
padding: 20px 16px;
text-decoration: none;
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
<nav>
<ul>
  <li class="talk">Etudiants</li>
  <li >LSI MEMBERS</li>
  <li class="active">dashboard</li> 
  <li style="float:right" class="ADD"><a href="index.php?action=ajouter"  class="btn btn-primary">ADD STUDENT</a></li>
  <li style="float:right" ><a  href="index.php?action=afficher"  class="btn btn-primary">show list</a> </li>

</ul> 

</nav>
 <!-- ###########################################333    ##########################################-->
   <header>

   </header>
   <div >
         <?= $content ?>
    </div> <!-- #contenu --> 

</div> 
    </body>
</html>