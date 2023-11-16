<?php
session_start();
if(isset($_SESSION['user']))
{  ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title> Hospital+ </title>
<link href="style.css" rel="stylesheet" />
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>

<body style="background-color:#F0FFFF">
<div class="container-fluid">


<div class="heading">
    
      <a href="index.php" > HOSPITAL<sup style="color:black" >+ </sup>  </a>
      <br>
  
</div>

<nav class="navbar" style="background-color:#fff;" >

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#btn" >

<span class="icon-bar" style="background:#000"></span>
<span class="icon-bar" style="background:#000"></span>
<span class="icon-bar" style="background:#000"></span>

</button>


<div class="collapse navbar-collapse" id="btn" >

<ul class="nav navbar-nav ">

<li><a href="doctordash.php">Appointments</a></li>
<li><a href="docprofile.php">Profile</a></li>

</ul>


<ul class="nav navbar-nav pull-right">

<li><a href="">Dr. <?php echo $_SESSION['user'];  ?></a></li>
<li><a href="signoutpatient.php"> <span class="fa fa-sign-out" style="font-size:20px" title="Sign-Out"></span> </a></li>

</ul>
</div>


</nav>

<?php  
}
else
{
	
?>



<script>alert("login first");
window.location='doctor_login.php';
</script>

<?php
 
                
	}

?>