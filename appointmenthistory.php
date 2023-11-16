<?php  include("adminheader.php")   ?>
<style>

 #managedoctor{
     background:#ffff;
     padding:20px;
 }

 

</style>



<div class="col col-lg-12">
   
 <b> A P P O I N T M E N T  | <span style="color:red"> &nbsp; A p p o i n t m e n t  &nbsp; &nbsp;H i s t o r y </span> </b>
   <div class="col col-lg-12" id="managedoctor">
    <table class="table">
      <tr><th>Doctor Name</th> <th>Patient Name</th><th>Specialization</th><th>Location</th> <th>Consultancy Fee </th> <th> Appointment Date</th> 
      <th>Appointment Creation Date </th> <th>Current Status </th>  <th>Action</th></tr>

      <?php
     include("connection.php");

    
     $sql="SELECT * FROM appointment ";
     $result=mysqli_query($conn,$sql);
     

     if(mysqli_num_rows($result)>0){
     while($row=mysqli_fetch_assoc($result)){
?>
<tr><td>Dr.<?php   echo $row['doctor']  ?></td> <td><?php   echo $row['patientname']  ?></td> <td><?php   echo $row['specialization']  ?></td>  <td><?php   echo $row['location']  ?></td> <td><?php   echo $row['fee']  ?></td> 
<td>  <?php   echo $row['date']." | ".$row['time']  ?> </td><td> <?php   echo $row['cdate']  ?> </td> 
<td> <?php   echo $row['currentstatus']  ?> </td> <td style="color:grey"> <?php  echo $row['action'] ?> </td>
</tr>

<?php
     }
     }

?>



    </table>
     
   </div>


</div>

<?php  include("footer.php")   ?>
