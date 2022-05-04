<?php
    if( (!isset($_SESSION)) ) // if the session is no  set then start to new session
    {
         session_start();
    }
    if(($_SESSION["uname"]!="")){
   
?>

<!DOCTYPE html>
<html>
<title>dashboard</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

</style>

<body>

<nav class="w3-sidebar w3-fixed  w3-bar-block w3-collapse  w3-card w3-light-grey" style="z-index:13;width:250px;" id="mySidebar">
  </a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
 
  <a class="w3-bar-item w3-button w3-teal" href="dc_dashboard.php">Dashboard</a>
  <a class="w3-bar-item w3-button" href="dc_profile.php">Profile</a>
  
 
 
 
  
  </div>
  
  </div>
  <a class="w3-bar-item w3-button w3-teal" href="logout.php">Logout</a>
 
</nav>
<div id="myTop" class="w3-container  w3-theme w3-large">
        <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
        <span id="myIntro" class="w3-hide w3-hide-large">KM Valuations</span></p>
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
    window.onscroll = function() {myFunction();};
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
function showDetails(str) {
  if (str==="") {
    document.getElementById("Showcase").innerHTML="";
    return;
  }
//  var dc=dashboard.department.value;
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState===4 && this.status===200) {
      document.getElementById("Showcase").innerHTML=this.responseText;
    }
  };
  xmlhttp.open("GET","getDetails.php?dept="+str,true);
  xmlhttp.send();
}

</script>    

<br>

<br>

<div class="w3-container w3-main" style="margin-left:250px;">
  <div class="w3-container w3-center w3-green"> <h4>Details</h4></div>

<form name="dashboard">
       
        <select class="w3-select w3-border w3-half w3-round-xlarge"  name="department" onchange="showDetails(this.value)">
                    <option value=""selected>Select Department</option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="IT">IT</option>
                    <option value="ECE">ECE</option>
         </select>
       
         
</form>
  <div id="Showcase"></div>
</body>
</html>
<?php

    }else{
    echo header("Location:index.php");
}
?>
