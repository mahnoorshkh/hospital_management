<?php
include("connection.php");
session_start();
if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
   

    $sql="SELECT * FROM admin where username='$username' and password='$password'";
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
        header("refresh:2;admindash.php");
    }
    else{?>
        <br><br><br><br><br><br> <br><br><br><br> <br>
        <hr>
        <center> <h2 style="color:red" >Your Login Username or password Invalid</h2> </center>
         <hr>

         <?php
         header("refresh:2;admin_login.php");
    }


}

?>