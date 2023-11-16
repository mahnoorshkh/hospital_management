<?php  include("patientheader.php")   ?>
<br><br>
<div class="col col-lg-3"></div>

<div class="col col-lg-6" >
<br>
<h4><b>Patient | Book Appointment </b> </h4>
<hr>


<form action="bookappointmentsql.php" method="post">

<?php
     include("connection.php");
     $us= $_SESSION['user'];
    
     $sql="SELECT fullname FROM registration where email='$us' ";
     $result=mysqli_query($conn,$sql);
     

     if($row=mysqli_fetch_assoc($result)){
    
?>
<input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" class="form-control" readonly> <br>

<?php  } ?>

<input type="text" name="user" value="<?php echo $_SESSION['user']; ?>" class="form-control" readonly> <br>
<select name="doctorspeci" id="" class="form-control">
<option value="Doctor Specialization">Doctor Specialization</option>
<?php
     
     $sql="SELECT specializations FROM specialization ";
     $result=mysqli_query($conn,$sql);
     

     if(mysqli_num_rows($result)>0){
     while($row=mysqli_fetch_assoc($result)){
?>

<option value="<?php   echo $row['specializations']  ?>"> <?php   echo $row['specializations']  ?> </option>
<?php
     }
     }

?>
</select> <br>

<select name="loc" id="" class="form-control">
<option value="Doctor Location">Doctor Location</option>
<?php
     
     $sql="SELECT locations FROM location ";
     $result=mysqli_query($conn,$sql);
     

     if(mysqli_num_rows($result)>0){
     while($row=mysqli_fetch_assoc($result)){
?>

<option value="<?php   echo $row['locations']  ?>"> <?php   echo $row['locations']  ?> </option>
<?php
     }
     }

?>
</select> <br>


<select name="doc" id="" class="form-control">
<option value="Doctors">Doctors</option>

<?php

    
     $sql="SELECT fullname FROM docregistration ";
     $result=mysqli_query($conn,$sql);
     

     if(mysqli_num_rows($result)>0){
     while($row=mysqli_fetch_assoc($result)){
?>

<option value="<?php   echo $row['fullname']  ?>"> <?php   echo $row['fullname']  ?> </option>
<?php
     }
     }

?>

</select> <br>

<label for="">Consultancy Fees </label>
<input type="text" name="fee" id="" value="300" readonly="readonly" class="form-control" placeholder="">  <br>

<input type="date" name="date" id="" value="" class="form-control">  <br>

<input type="time" name="time" id="" value=""  class="form-control"> 

<br>
<input type="submit" value="Book" name="submit" class="btn btn-success pull-right">
<br>
<br><br>


</form>


</div>

<div class="col col-lg-3"></div>




<?php  include("footer.php")   ?>