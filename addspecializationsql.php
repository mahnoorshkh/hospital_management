<?php
include("connection.php");

if(isset($_POST['addsplbtn'])){

    $spl=$_POST['addspl'];
    $dt=date("d/m/y");
   
    $sql="INSERT INTO specialization (specializations,cdate) VALUES ('$spl','$dt')";
    if(mysqli_query($conn,$sql)){
        
        header("location:doctorsmanage.php");
    }
    else{
        echo "Error :".$sql."<br>".mysqli_error($conn);
    }
mysqli_close($conn);

}



if(isset($_POST['adddoctorbtn'])){

    $doct=$_POST['fullname'];
    $psd=$_POST['psd'];
    $dt=date("d/m/y");
   
    $sql="INSERT INTO docregistration (fullname,cdate,password) VALUES ('$doct','$dt','$psd')";
    if(mysqli_query($conn,$sql)){
        
        header("location:doctorsmanage.php");
    }
    else{
        echo "Error :".$sql."<br>".mysqli_error($conn);
    }
mysqli_close($conn);

}

?>