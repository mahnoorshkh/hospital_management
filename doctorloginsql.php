<?php
include("connection.php");

if(isset($_POST['submit'])){
session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
   

    $sql="SELECT id  FROM docregistration where username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count>0){
        $_SESSION['user']=$username;
        ?>

         
        <br><br><br><br><br><br> <br><br><br><br> <br>
        <hr>
        <center> <h2 style="color:green" >You are login Successfully ! Welcome  </h2> </center>
         <hr>


         
        <?php
        header("refresh:2;doctordash.php");
    }
    else{
        ?>
        <br><br><br><br><br><br> <br><br><br><br> <br>
        <hr>
        <center> <h2 style="color:red" > Your Login Username or password Invalid </h2></center>
         <hr>

         <?php
         header("refresh:2;doctor_login.php");
    }


}

?>