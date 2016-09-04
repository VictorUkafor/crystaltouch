<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" />
 <head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0"/>
 <title>Crystal Touch - Admin Login</title>
 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />-->
 <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet" />
 <link href="../css/admin-main.css" type="text/css" rel="stylesheet" />
 </head>
<body class="login-body">
<header class="head">
<div class="rest">	
<img src="../images/admin-logo.png" class="logo" />	
</div>
</header>

<div class="login-section">
<div class="rest">
 

<form class="form-horizontal contact-form col-xs-12" method="post" action="includes/form_validation.php" novalidate>

<h1>Admin Login</h1>

<div class="form-group">
<label class="col-xs-2 control-label" id="name" for="name2">Username:<span class="ast">*</span></label>  
 <div class="col-xs-10"><input class="form-control" id="name2" type="text" name="username" placeholder="Your Username"/></div>
 </div>
 
 
<div class="form-group">
<label class="col-xs-2 control-label" id="email" for="email2">Password:<span class="ast">*</span></label>  
 <div class="col-xs-10"><input class="form-control" id="email2" type="password" name="password" placeholder="Your Password" /></div>
 </div> 
 
 <div class="form-group">
<div class="col-xs-10 col-xs-offset-2"> 
<input class="btn" id="send" type="submit" name="send" value="Login" />
</div>
</div>
 
 <p class="lastast"><span class="aster">*</span> &nbsp; means a required field</p>
 
 <p class="return"><a href="../index.php">Return to Home Page</a></p>
 
</form>


</div>
</div>
	

<footer class="last-f col-xs-12">
<div class="rest">
<p>Copyright (c) 2016 &nbsp; &nbsp; Crystal Touch Drycleaning Services &nbsp; &nbsp; All Rights Reserved &nbsp; 
 | &nbsp; &nbsp;  Designed  &  Developed &nbsp; by &nbsp;  
 <a class="vick" href="http://localhost/www.victorukafor.com" target="_blank">Victor<span class="vick1">Ukafor</span></a></p>
 </div>
</footer>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="../js/jquery-2.2.2.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
	