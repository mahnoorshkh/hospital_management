<?php  include("patientheader.php")   ?>
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
<h4 style="color:grey;font-weight:800;letter-spacing:2px">USER | Appointment History </h4>
<table class="table">
      <tr><th>Doctor Name</th> <th>Specialization</th> <th>Consultancy Fee </th> <th> Appointment Date / Time </th> 
      <th>Appointment Creation Date </th> <th>Current Status </th>  <th>Action</th></tr>
      <?php
     include("connection.php");
     $u=$_SESSION['user'];
    
     $sql="SELECT * FROM appointment WHERE username='$u' ";
     $result=mysqli_query($conn,$sql);
     

     if(mysqli_num_rows($result)>0){
     while($row=mysqli_fetch_assoc($result)){
?>
<tr><td> Dr.<?php   echo $row['doctor']  ?></td> <td><?php   echo $row['specialization']  ?></td><td><?php   echo $row['fee']  ?></td> 
<td>  <?php   echo $row['date']." | ".$row['time']  ?> </td><td> <?php   echo $row['cdate']  ?> </td> 
<?php  if($row['currentstatus']=='Cancel By Patient'){ ?>
<td style="color:red;font-weight:700">  <?php   echo $row['currentstatus']  ?> </td>
<?php } ?>

<?php if($row['currentstatus']=='Confirmed By Doctor'){ ?>
<td style="color:green;font-weight:700">  <?php   echo $row['currentstatus']  ?> </td>
<?php } ?>

<?php if($row['currentstatus']=='Cancel By Doctor'){ ?>
<td style="color:blue;font-weight:700">  <?php   echo $row['currentstatus']  ?> </td>
<?php } ?>

<?php if($row['currentstatus']=='Appointment Booked'){ ?>
<td style="">  <?php   echo $row['currentstatus']  ?> </td>
<?php } ?>
 <td> <a href="cancelappointment.php?x=<?php  echo $row['id'] ?>">Cancel</a> &nbsp;&nbsp;&nbsp;&nbsp;  <a href="deleteappointment.php?x=<?php  echo $row['id'] ?>"><span class="fa fa-trash"></span></a> </td>
</tr>

<?php
     }
     }

?>

    </table>
</div>

<?php  include("footer.php")   ?>