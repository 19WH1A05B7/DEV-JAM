<?php
    if( (!isset($_SESSION)) ) // if the session is no  set then start to new session
    {
         session_start();
    }
    if(($_SESSION["uname"]!="")){
    
?>
<br>
<?php require 'deptCordinat.php'; ?>
<div class="w3-mobile w3-container" style="margin-left:250px;">
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green">Update</button>
    
</div>

<br>
<div class="w3-container w3-main" style="margin-left:250px;">
  <div class="w3-container w3-center w3-green"> <h4>Faculty</h4></div>

  <table class="w3-table-all w3-hoverable w3-card">
    <thead>
      <tr class="w3-light-grey w3-mobile">
        <th>Department ID</th>
        <th>Coordinator Name</th>
        <th>Mobile</th>
        <th>Department</th>
        <th>Address</th>
      </tr>
    </thead>
    
    <?php include 'dbconfig.php';?>		

<?php  
    error_reporting(0);

    $sql = "SELECT * from dept_coordinator";
    $result = mysqli_query($conn, $sql);
     
    while($row = mysqli_fetch_assoc($result)) {
?>        
        <tr class="w3-mobile">
            <td><?php echo $row["dc_id"] ;?></td>
            <td><?php echo $row["dc__name"] ;?></td>
            <td><?php echo $row["mobile_no"] ;?></td>
            <td><?php echo $row["dept"] ;?></td>
            <td><?php echo $row["Address"] ;?></td>
            
       </tr>
<?php
    }
                 
    mysqli_close($conn);

?>
    
   
  </table>
</div>



<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
<!--        <img src="../images/img_avatar2.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">-->
      </div>

        <h2>Update</h2>

<table border="2">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>mobile_no</th>
    <th>Department</th>
    <th>Address</th>
    <th>Edit</th>
  </tr>

<?php

include "dbconfig.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from dept_coordinator"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['dc_id']; ?></td>
    <td><?php echo $data['dc__name']; ?></td>
    <td><?php echo $data['mobile_no']; ?></td> 
    <td><?php echo $data['dept']; ?></td>
    <td><?php echo $data['Address']; ?></td> 
    <td><a href="edit.php?id=<?php echo $data['dc_id']; ?>">Edit</a></td>
  </tr>	
<?php
}
?>
</table>

      

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>
      </form>      
    </div>
  </div>
<br><br><br><br><br><br>





     
</body>
</html> 
<?php
}else{
    echo header("Location:./index.php");
}
?>