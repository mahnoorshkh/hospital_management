<?php

include("connection.php");
if(isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $userr=$_POST['user'];
    $specialization=$_POST['doctorspeci'];
    $location=$_POST['loc'];
    $doctor=$_POST['doc'];
    $fee=$_POST['fee'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $cdate=date('d/m/y');
    $currentstatus="Appointment Booked";

    $sql="INSERT INTO appointment (specialization,doctor,fee,date,time,cdate,currentstatus,username,patientname,action) VALUES ('$specialization','$doctor','$fee','$date','$time','$cdate','$currentstatus','$userr','$fullname','Booked')";
    if(mysqli_query($conn,$sql)){

        ?>


        <br><br><br><br><br><br> <br><br><br><br> <br>
        <hr>
        <center> <h2 style="color:green">You appointment is booked ! Thankyou </h2> </center>
         <hr>



        <?php
        header("refresh:2;bookappointment.php");
    }
    else{
        echo "Error :".$sql."<br>".mysqli_error($conn);
    }
mysqli_close($conn);

}

?>