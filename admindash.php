<?php  include("adminheader.php")   ?>
<style>

.pat{
    padding:20px;
    text-align:center;
    font-size:25px;
    font-weight:800;
    background:#fff;
    box-shadow:1px 1px 5px grey;
}

.pat a{
    font-size:15px;
    font-weight:400;
    letter-spacing:2px;
}
</style>



<div class="col col-lg-12">
<h4 style="color:grey;font-weight:800;letter-spacing:2px">ADMIN | DASHBOARD </h4>
<hr>
<br><br><br><br>
<div class="col col-lg-4 "> 
 <div class="col col-lg-12 pat"> 
  Manage Patients <br>
  <a href="patientsmanage.php">Manage </a>
 </div>
</div>
<div class="col col-lg-4 "> 
 <div class="col col-lg-12 pat">
 Manage Doctors <br>
 <a href="doctorsmanage.php">Manage</a>
 </div>
</div>
<div class="col col-lg-4 "> 
 <div class="col col-lg-12 pat">
 Appointment History <br>
 <a href="appointmenthistory.php"> History </a> 
 </div>
</div>

<br><br><br><br><br>
</div>

<?php  include("footer.php")   ?>