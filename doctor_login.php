<?php  include("header.php")   ?>
<br><br>
<div class="col col-lg-3"></div>

<div class="col col-lg-6" style="box-shadow:1px 1px 5px grey">
<br>
<h3> <span style="color:red;font-weight:700"> HOSPITAL<sup>+</sup> </span> | Doctor Login</h3>
<hr>
<strong style="letter-spacing:2px">Enter your username and password to log in </strong>
<br>
<br>
<form action="doctorloginsql.php" method="post">
<input type="text" name="username" id="" placeholder="Username" class="form-control"> <br>
<input type="text" name="password" id="" placeholder="Password" class="form-control">  <br>
<input type="submit" value="Log in " class="btn btn-success pull-right" name="submit">
<br>
<hr>
<center>
Don't have an account yet ? <a href="doctorregistration.php"> Create an Account </a>.
</center>
<br><br><br>
</form>

</div>

<div class="col col-lg-3"></div>

<?php  include("footer.php")   ?>