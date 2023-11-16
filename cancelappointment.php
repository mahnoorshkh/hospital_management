<?php
session_start();
include("connection.php");
$d=$_REQUEST['x'];
$u=$_SESSION['user'];

$sql="UPDATE appointment SET currentstatus='Cancel By Patient' , action='Cancelled' WHERE id='$d' and username='$u'";
$update=mysqli_query($conn,$sql);
if($update)
{   
    ?>


    <br><br><br><br><br><br> <br><br><br><br> <br>
    <hr>
    <center> <h2 style="color:green">Appointment Cancelled Successfully . </h2> </center>
     <hr>



    <?php
	header("refresh:1;appointmenthistorypatient.php");
	
	}


    ?>