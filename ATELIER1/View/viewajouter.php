<?php $this->title = "Sign in"; ?>
<html>
    <head> 
    <title>Sign in</title>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
   <div style="margin-top: 80px; margin-bottom: 80px "> 
    <form method="POST"  style="max-width: 380px;
        padding: 15px 35px 45px; 
        margin: 0 auto;
        margin-top: 110px;
        background-color: #fff;
        border: 1px solid rgba(0,0,0,0.1); " >       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="nom" placeholder="Nom" required="" autofocus=""  style=" 
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            margin-bottom:10px;
            " />
      <input type="text" class="form-control" name="prenom" placeholder="Prenom" required="" style=" 
      margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;" />      
    <input type="number" class="form-control" name="age" placeholder="Age" required="" style=" 
      margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;" />      
    <input type="text" class="form-control" name="cne" placeholder="CNE" required="" style=" 
      margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;" />      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <input class="btn btn-lg btn-primary btn-block"  style="width:150px ; background-color: gray" name="save" type="submit" value="ADD" >   
    </form>
 </div>


  </body>
</html>
