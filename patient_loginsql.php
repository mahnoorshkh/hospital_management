<?php
include("connection.php");

if(isset($_POST['submit'])){
session_start();
    $email=$_POST['email'];
    $password=$_POST['password'];
   

    $sql="SELECT id  FROM registration where email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count>0){
        $_SESSION['user']=$email;
        ?>

         
        <br><br><br><br><br><br> <br><br><br><br> <br>
        <hr>
        <center> <h2 style="color:green" >You are login Successfully ! Welcome  </h2> </center>
         <hr>


         
        <?php
        header("refresh:2;patientdash.php");
    }
    else{
        ?>
        <br><br><br><br><br><br> <br><br><br><br> <br>
        <hr>
        <center> <h2 style="color:red" > Your Login Username or password Invalid </h2></center>
         <hr>

         <?php
         header("refresh:2;patient_login.php");
    }


}

?>