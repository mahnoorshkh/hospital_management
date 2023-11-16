<?php  include("adminheader.php")   ?>
<style>

 #managedoctor{
     background:#ffff;
     padding:20px;
 }

 

</style>



<div class="col col-lg-12">
   
 <b> P A T I E N T  | <span style="color:red"> &nbsp; M a n a g e  &nbsp; &nbsp;P a t i e n t s  </span></b>
   <div class="col col-lg-12" id="managedoctor">
    <table class="table">
      <tr><th>Full Name</th> <th>Address</th> <th>City</th> <th>Gender</th> <th>Email</th> <th>Action</th></tr>

      <?php
     include("connection.php");

    
     $sql="SELECT * FROM registration ";
     $result=mysqli_query($conn,$sql);
     

     if(mysqli_num_rows($result)>0){
     while($row=mysqli_fetch_assoc($result)){
?>
<tr><td><?php   echo $row['fullname']  ?></td> <td><?php   echo $row['address']  ?></td> <td><?php   echo $row['city']  ?></td> 
<td>  <?php   echo $row['gender'] ?> </td> <td>  <?php   echo $row['email'] ?> </td> 
<td> <a href="deleteappointmentadmin.php?x=<?php  echo $row['id'] ?>"><span class="fa fa-trash"></span></a> </td>
</tr>
<option value="">  </option>
<?php
     }
     }

?>
    </table>
     
   </div>


</div>

<?php  include("footer.php")   ?>
