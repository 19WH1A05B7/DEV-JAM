<?php
include "dbconfig.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from dept_coordinator where dc_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['fullname'];
    $mb = $_POST['mb'];
    $dept = $_POST['dept'];
    $edit = mysqli_query($conn,"update dept_coordinator set dc__name='$fullname', mobile_no='$mb',dept='$dept' where dc_id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:dc_profile.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($conn);
    }    	
}
?>
<?php
    if( (!isset($_SESSION)) ) // if the session is no  set then start to new session
    {
         session_start();
    }
    if(($_SESSION["uname"]!="")){
    
?>

<!DOCTYPE html>
<html>
<title>portal</title>
<link rel = "icon" href = "images/logo.jpg" type = "image/x-icon">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

</style>

<body>

<nav class="w3-sidebar w3-fixed  w3-bar-block w3-collapse  w3-card w3-light-grey" style="z-index:13;width:250px;" id="mySidebar">
    
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  
  <a class="w3-bar-item w3-button w3-teal" href="dc_dashboard.php">Dashboard</a>
  <a class="w3-bar-item w3-button" href="dc_profile.php">Profile</a>
 
  
 
  
   
  <a class="w3-bar-item w3-button w3-teal" href="logout.php">Logout</a>
  
</nav>
<div id="myTop" class="w3-container  w3-theme w3-large">
        <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
        <span id="myIntro" class="w3-hide w3-hide-large"></span></p>
</div>
    
<script>
    // Open and close the sidebar on medium and small screens
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
    }

    // Change style of top container on scroll
    window.onscroll = function() {myFunction()};
    function myFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
        document.getElementById("myIntro").classList.add("w3-show-inline-block");
      } else {
        document.getElementById("myIntro").classList.remove("w3-show-inline-block");
        document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
      }
    }

    // Accordions
    function myAccordion(id) {
      var x = document.getElementById(id);
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme";
      } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme", "");
      }
    }
</script>    
<?php include 'dbconfig.php';?>	
<h3>Update Data</h3>
<div class="w3-container w3-main w3-quarter" style="margin-left:250px;">
    <div class="w3-section">
<form class="w3-container" method="POST">
  <input class="w3-input w3-border w3-margin-bottom" type="text" name="fullname" value="<?php echo $data['dc__name'] ?>" placeholder="Enter Full Name" Required>
  <input class="w3-input w3-border w3-margin-bottom" type="text" name="mb" value="<?php echo $data['mobile_no'] ?>" placeholder="Enter Mobile No" Required>
  <input class="w3-input w3-border w3-margin-bottom" type="text" name="dept" value="<?php echo $data['dept'] ?>" placeholder="Enter Department" Required>
  <input class="w3-btn w3-blue" type="submit" name="update" value="Update">
  </div>
</form>
    </div>
<?php

    
     //echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
                 
    mysqli_close($conn);

?>
    
   
  </table>
</div>

</body>
</html>
<?php
}else{
    echo header("Location:dc_profile.php");
}
?>