<?php $this->title = "CHANGE"; 
?>
<html>
 <head> 
<title>INSCRIPTION</title>
<meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
</body>
<div style="margin-top: 80px; margin-bottom: 80px "> 
    <form method="POST" style="max-width: 380px;
        padding: 15px 35px 45px; 
        margin: 0 auto;
        margin-top: 130px;
        background-color: #fff;
        border: 1px solid rgba(0,0,0,0.1); " >       
      <h2 class="form-signin-heading">Edit Student</h2>
      <input type="text" class="form-control" name="nom" placeholder="Nom" autofocus=""  style=" 
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            margin-bottom:10px;
            " />
      <input type="text" class="form-control" name="prenom" placeholder="Prenom"  style=" 
      margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;" />      
    <input type="number" class="form-control" name="age" placeholder="Age"  style=" 
      margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;" />      
    <input type="text" class="form-control" name="cne" placeholder="CNE"  style=" 
      margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;" />      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <input class="btn btn-lg btn-primary btn-block" style=" background-color: gray" type="submit"  name ="save" value="change" >   
      <input class="btn btn-lg btn-primary btn-block" style=" background-color: gray"type="submit" formaction="http://localhost/atelier1/index.php?action=afficher"  value="back" >   
    
      </form>
  </div>
</html>