<?php
session_start();
include("connection.php");
$d=$_REQUEST['x'];
$u=$_SESSION['user'];

$sql="Delete from specialization  WHERE id='$d' ";
$delete=mysqli_query($conn,$sql);
if($delete)
{   
    ?>


    <br><br><br><br><br><br> <br><br><br><br> <br>
    <hr>
    <center> <h2 style="color:green">Specialization Deleted  Successfully . </h2> </center>
     <hr>



    <?php
	header("refresh:1;doctorsmanage.php");
	
	}


    ?>