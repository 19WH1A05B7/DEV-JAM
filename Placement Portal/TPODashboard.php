<?php
    if( (!isset($_SESSION)) ) // if the session is no  set then start to new session
    {
         session_start();
    }
    if(($_SESSION["uname"]!="")){
    
?>
<?php require 'TPOContainer.php'; ?>
<br>
<div class="w3-mobile w3-container" style="margin-left:250px;">
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green">Add Member</button>
    
</div>

<br>
<div class="w3-container w3-main" style="margin-left:250px;">
  <div class="w3-container w3-center w3-green"> <h4>Faculty</h4></div>

  <table class="w3-table-all w3-hoverable w3-card">
    <thead>
      <tr class="w3-light-grey w3-mobile">
        <th>S.No</th>
        <th>Id</th>
        <th>Name</th>
        <th>Department</th>
        <th>Mobile Number</th>
        <th>Permanent Address</th>
        <th>Communication Address</th>
        <th>Role<th>
        <th>Blood Group</th>
      </tr>
    </thead>
    
    <?php include '../dbconfig.php';?>		

<?php  
    error_reporting(0);

    $sql = "SELECT * from faculty f";
    $result = mysqli_query($conn, $sql);
     
    while($row = mysqli_fetch_assoc($result)) {
?>        
        <tr class="w3-mobile">
            <td><?php echo $row["sno"] ;?></td>
            <td><?php echo $row["Faculty_Id"] ;?></td>
            <td><?php echo $row["Faculty_name"] ;?></td>
            <td><?php echo $row["Dept"] ;?></td>
            <td><?php echo $row["mobile_no"] ;?></td>
            <td><?php echo $row["Permanent_Address"] ;?></td>
            <td><?php echo $row["Communication_address"] ;?></td>
            <td><?php echo $row["Role_id"] ;?></td>
            <td><?php echo $row["Blood_group"] ;?></td>
            
       </tr>
<?php
    }
                 
    mysqli_close($conn);

?>
       <!-- 
CREATE TABLE `faculty` (
  `Faculty_name` varchar(20) NOT NULL,
  `Faculty_Id` int(11) NOT NULL,
  `Dept` varchar(20) NOT NULL,
  `Role_Id` int(11) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `Communication_address` varchar(20) NOT NULL,
  `Permanent_Address` varchar(20) NOT NULL,
  `Blood_group` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-->
    
   
  </table>
</div>



<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <img src="../images/img_avatar2.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

        <form class="w3-container" action="process.php" method="post">
        <div class="w3-section">
          <label><b>Faculty ID</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" maxlength="9" name="Faculty_Id" required>
          <label><b>Faculty Name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" maxlength="74" name="Faculty_name" required>
          <label><b>Department</b></label>
          <select class="w3-select w3-border" name="Dept" required="">
                    <option value="" disabled selected>Choose Branch</option>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="IT">IT</option>
                    <option value="EEE">EEE</option>
                    <option value="AIML">AIML</option>
                    <option value="Library">Library</option>
                    <option value="admin">Admin</option>
          </select>
          <label><b>Mobile Number</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" maxlength="10" name="mobile_no" required>
          <label><b>Communication Address</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="Permanent_Address" required>
          <label><b>Permanent Address</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="Communication_address" required>
          <label><b>Select Role</b></label>
          <select class="w3-select w3-border" name="Role_Id" required="">
                    <option value="" disabled selected>Choose role</option>
                    <option value="1">admin</option>
                    <option value="2">hod</option>
                    <option value="3">classteacher</option>
                    <option value="4">teacher</option>
                    <option value="5">student</option>
                    <option value="6">parent</option>
          </select>
          <label><b>Blood Group</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" maxlength="2" name="Blood_group" required>
         
          
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Add</button>
        </div>
      
<!-- 

          Faculty_Id,Faculty_Name,Dept,mobile_number,Email,Permanent_address,Communication_address,Blood_group) VALUES (?,?,?,?,?,?,?,?)";
-->
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>
      </form>      
    </div>
  </div>
<br><br><br><br><br><br>

<?php require '../footer.php'; ?>




     
</body>
</html> 
<?php
}else{
    echo header("Location:./index.php");
}
?>