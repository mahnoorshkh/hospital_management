<?php  include("patientheader.php")   ?>
<br><br>
<div class="col col-lg-3"></div>

<div class="col col-lg-6" >
<br>
<h4><b>Update | Your Profile</b> </h4>
<hr>

<?php
     include("connection.php");

     $user=$_SESSION['user'];
     $sql="SELECT * FROM registration WHERE email='$user' ";
     $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($result);

     if(mysqli_num_rows($result)>0){

?>
<form action="profileupdate.php" method="post">
<label for="">Name</label><br>
<input type="text" name="name" id="" value="<?php  echo $row['fullname'];  ?>" class="form-control"> <br>

<label for="">Username</label><br>
<input type="text" name="user" id="" value="<?php  echo $row['username'];  ?>" class="form-control"> <br>

<label for="">Email </label>
<input type="text" name="email" id="" value="<?php  echo $row['email'];  ?>" readonly="readonly" class="form-control">  <br>

<label for="">Password</label>
<input type="text" name="password" id="" value="<?php  echo $row['password'];  ?>" class="form-control">  <br>

<label for="">Address</label>
<input type="text" name="address" id="" value="<?php  echo $row['address'];  ?>"  class="form-control"> <br>

<label for="">City</label>
<input type="text" name="city" id="" value="<?php  echo $row['city'];  ?>"  class="form-control"> <br>


<br>
<input type="submit" value="Update " name="submit" class="btn btn-success pull-right">
<br>
<br><br>


<?php    }  ?>
</form>


</div>

<div class="col col-lg-3"></div>




<?php  include("footer.php")   ?>