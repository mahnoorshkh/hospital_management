<?php
include("connection.php");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['user'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $city=$_POST['city'];

    $sql="UPDATE docregistration  SET fullname='$name' , username='$username',password='$password' , address='$address',city='$city' WHERE email='$email'";
    if(mysqli_query($conn,$sql)){

        ?>


        <br><br><br><br><br><br> <br><br><br><br> <br>
        <hr>
        <center> <h2 style="color:green">Record Updatted Successfully ! Thankyou </h2> </center>
         <hr>



        <?php
        header("refresh:1;docprofile.php");
    }
    else{
        echo "Error :".$sql."<br>".mysqli_error($conn);
    }
mysqli_close($conn);

}

?>