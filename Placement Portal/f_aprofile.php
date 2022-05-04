<?php
    if( (!isset($_SESSION)) ) // if the session is no  set then start to new session
    {
         session_start();
    }
    if(($_SESSION["uname"]!="")){
    
?>

<!DOCTYPE html>
<html>
<title>BVRITH</title>
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
    <a class="w3-bar-item w3-button w3-border-bottom w3-large w3-mobile" href="dashboard.php" >  <img class="w3-image" src="images/logo.jpg" alt="Architecture" width="100" height="40">
  </a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  
  <a class="w3-bar-item w3-button w3-teal" href="dashboard.php">Dashboard</a>
  <div>
      <a class="w3-bar-item w3-button" href="f_profile.php">Profile</a>
    <a class="w3-bar-item w3-button" onclick="myAccordion('demo')" href="javascript:void(0)">updations<i class="fa fa-caret-down"></i></a>
    <div id="demo" class="w3-hide">
      <a class="w3-bar-item w3-button" href="f_pprofile.php">Personal Profile</a>
      <a class="w3-bar-item w3-button" href="f_aprofile.php">Academic Profile</a>
    </div>
  </div> 
  </div>
  <a class="w3-bar-item w3-button w3-teal" href="logout.php">Logout</a>
  
</nav>
    
<script>    // Open and close the sidebar on medium and small screens
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
      if (x.className.indexOf("w3-show") === -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme";
      } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme", "");
      }
    }
</script>    

<div class="w3-container w3-main" style="margin-left:250px;">
  <div class="w3-container w3-center w3-green"> <h4>Student Personal Details</h4></div>


<form class="w3-container" action="addp_profile.php">
  <div class="w3-section">
      
    <label><b>Name</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" maxlength="50" name="Name" required>
    <label><b>Email</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" maxlength="50" name="official_mail_ID" required>
    <label><b>Personal_mail_id</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" maxlength="9" name="Personal_mail_id" required>
    <label><b>Institute_name</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" maxlength="9" name="Institute_name" required>
    <label><b>MobileNo</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" maxlength="9" name="MobileNo" required>
   
    <label><b>Department</b></label>
        <select class="w3-select w3-border" name="branch" required="">
            <option value="" disabled selected>Choose Branch</option>
            <option value="CSE">Computer Science and Engineering</option>
            <option value="ECE">Information Technology</option>
            <option value="IT">Electronics and Communications Engineering</option>
            <option value="EEE">Electrical and Electronics Engineering</option>
            <option value="AIML">AIML</option>
        </select>
    <p><button class="w3-btn w3-black">Submit</button></p>
</body>
   </div>
</form>



<br><br><br><br><br><br>

<?php require 'footer.php'; ?>
     
</body>
</html> 
<?php
}else{
    echo header("Location:index.php");
}
?>

