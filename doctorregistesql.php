<?php
include("connection.php");

if(isset($_POST['submit'])){

    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $city=$_POST['city'];

    $sql="INSERT INTO docregistration (fullname,email,username,password,gender,address,city) VALUES ('$fname','$email','$username','$password','$gender','$address','$city')";
    if(mysqli_query($conn,$sql)){

        ?>


        <br><br><br><br><br><br> <br><br><br><br> <br>
        <hr>
        <center> <h2 style="color:green">Register Successfully ! Thankyou </h2> </center>
         <hr>



        <?php
        header("refresh:2;doctorregistration.php");
    }
    else{
        echo "Error :".$sql."<br>".mysqli_error($conn);
    }
mysqli_close($conn);

}

?>