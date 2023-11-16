<?php
session_start();
include("connection.php");
$d=$_REQUEST['x'];


$sql="UPDATE appointment SET currentstatus='Confirmed By Doctor' , action='Confirmed' WHERE id='$d' ";
$update=mysqli_query($conn,$sql);
if($update)
{   
    ?>


    <br><br><br><br><br><br> <br><br><br><br> <br>
    <hr>
    <center> <h2 style="color:green">Appointment Confirmed Successfully . </h2> </center>
     <hr>



    <?php
	header("refresh:1;doctordash.php");
	
	}


    ?>