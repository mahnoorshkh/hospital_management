<?php  include("adminheader.php")   ?>
<style>
 .btn a{ text-decoration:none;text-align:left}
 #addspecialization,#addlocation ,#adddoctor,#managedoctor{
     background:#ffff;
     padding:20px;
 }

 

</style>



<div class="col col-lg-12">
   <div class="col-lg-4 btn">
     <a href="#addspecialization"><div class="alert alert-success" ><span class="fa fa-edit"></span> &nbsp;Add Doctor Specialization </div> </a>
     <a href="#addlocation"><div class="alert alert-success" ><span class="fa fa-edit"></span> &nbsp;Add Doctor Location </div> </a>
     <a href="#adddoctor"><div class="alert alert-warning" ><span class="fa fa-edit"></span> &nbsp; Add Doctor </div> </a>
     
   </div>

   <div class="col-lg-8">
      <div class="col col-lg-12" id="addspecialization">
         <form action="addspecializationsql.php" method="post">
            <input type="text" name="addspl" id="" placeholder="add Specialization " class="form-control"><br>
            <input type="submit" value="Add" class="btn btn-warning pull-right" name="addsplbtn">
         </form>
         <br>
         <br>
        <br>
        <b> Specialization </b>
        
        <table class="table">
        <tr style="background:blue;color:#fff">
         <td>#</td> <td>Specialization</td> <td>Added Date </td> <td>Action</td>
        </tr>
        <?php
     include("connection.php");

     $sql="SELECT * FROM specialization ";
     $result=mysqli_query($conn,$sql);
     

     if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){

?>

<tr><td></td> <td><?php  echo $row['specializations'];  ?></td><td><?php  echo $row['cdate'];  ?></td> <td><a href="deletespl.php?x=<?php echo $row['id'];  ?>"> <span class="fa fa-trash"></span></a> </td></tr>



<?php } }  ?>

        </table>
        <hr>
        
      </div>

      <div class="col-lg-8">
      <div class="col col-lg-12" id="addlocation">
         <form action="addlocationsql.php" method="post">
            <input type="text" name="addloc" id="" placeholder="add Location " class="form-control"><br>
            <input type="submit" value="Add" class="btn btn-warning pull-right" name="addlocbtn">
         </form>
         <br>
         <br>
        <br>
        <b> Location </b>
        
        <table class="table">
        <tr style="background:blue;color:#fff">
         <td>#</td> <td>Location</td> <td>Added Date </td> <td>Action</td>
        </tr>
        <?php
     include("connection.php");

     $sql="SELECT * FROM location ";
     $result=mysqli_query($conn,$sql);
     

     if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){

?>

<tr><td></td> <td><?php  echo $row['locations'];  ?></td><td><?php  echo $row['cdate'];  ?></td> <td><a href="deleteloc.php?x=<?php echo $row['id'];  ?>"> <span class="fa fa-trash"></span></a> </td></tr>



<?php } }  ?>

        </table>
        <hr>
        
      </div>






      <div class="col col-lg-12" id="adddoctor">
         
         <form action="addspecializationsql.php" method="post">
            <input type="text" name="fullname" id="" placeholder="add Doctor " class="form-control"><br>
            <input type="text" name="psd" id="" placeholder="Create Password for Doctor " class="form-control"><br>
            <input type="submit" value="Add" class="btn btn-warning pull-right" name="adddoctorbtn">
         </form>
         <br>
         <br>
         <br>
         <b> Doctors </b>
         <table class="table">
        <tr style="background:blue;color:#fff">
         <td>#</td> <td>Dr. Name</td> <td>Added Date </td> <td>Action</td>
        </tr>
        <?php
    

     $sql="SELECT * FROM docregistration ";
     $result=mysqli_query($conn,$sql);
     

     if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){

?>

<tr><td></td> <td> Dr. <?php  echo $row['fullname'];  ?></td><td><?php  echo $row['cdate'];  ?></td> <td><a href="deletedoctor.php?x=<?php echo $row['id'];  ?>"> <span class="fa fa-trash"></span></a> </td></tr>



<?php } }  ?>

        </table>
        <hr>
        
      </div>
      
   </div>

 <br clear="all">
 


</div>

<?php  include("footer.php")   ?>
