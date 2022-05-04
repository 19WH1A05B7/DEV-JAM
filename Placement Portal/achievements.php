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
<link rel = "icon" href = "images\logo.jpeg" type = "image/x-icon">

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
    <a class="w3-bar-item w3-button" onclick="myAccordion('demo')" href="javascript:void(0)">profile <i class="fa fa-caret-down"></i></a>
    <div id="demo" class="w3-hide">
      <a class="w3-bar-item w3-button" href="p_profile.php">Personal Profile</a>
      <a class="w3-bar-item w3-button" href="a_profile.php">Academic Profile</a>
    </div>
  </div>
  <a class="w3-bar-item w3-button" href="achievements.php">Achievements</a>
  <a class="w3-bar-item w3-button" href="reg.php">Registrations</a>
  <a class="w3-bar-item w3-button" href="skillset.php">Skillset</a>
  <a class="w3-bar-item w3-button" href="Jobposts.php">Job Posts</a>
  
  </div>
  <a class="w3-bar-item w3-button w3-teal" href="logout.php">Logout</a>
  
</nav>
    
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
function showForm(str) {
  if (str==="") {
    document.getElementById("Showcase").innerHTML="";
    return;
  }
  var sem=dashboard.Semester.value;
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState===4 && this.status===200) {
      document.getElementById("Showcase").innerHTML=this.responseText;
    }
  };
  xmlhttp.open("GET","getFile.php?course="+str,true);
  xmlhttp.send();
}    
</script>    
<?php include 'dbconfig.php';?>
<div class="w3-container w3-main" style="margin-left:250px;">
  <div class="w3-container w3-center w3-green"> <h4>Achievements</h4></div>
<form action="" method="post">
    <h3>Choose Event</h3>
    <select name="event" id="event">
        <option value=""disabled selected>Choose option</option>
        <option value="Technical">Technical</option>
        <option value="Non Technical">Non Technical</option>
    </select>
    <div>
        <br>
            <input type="submit" name="submit" vlaue="Choose options">
    </div>
</form>
    <?php include 'dbconfig.php';?>		
    <?php  
    if(isset($_POST['submit']))
    {
        if(!empty($_POST['event'])){
            if($_POST=="Technical")
        {
        echo"<table>
        <tr>
            <td colspan='20'>
            <center><b>List of Events Registered</b></center>
            </td>
        </tr>
        <tr>
            <td><b>E.No</b></td>
            <td><b>Event</b></td>
            <td><b>Count</b></td>
        </tr>
        <tr>
            <td><b>1</b></td>
            <td><b>Hackathons</b></td>
            <td><input type='number'  name='Hackathon' value='value1'></td>
        </tr>
        <tr>
            <td><b>2</b></td>
            <td><b>Ideathons</b></td>
            <td><input type='number'  name='ideathons' value='value2'></td>
        </tr>
        <tr>
            <td><b>3</b></td>
            <td><b>Workshops</b></td>
            td><input type='number'  name='Workshops' value='value3'></td>
        </tr>
        <tr>
            <td><b>4</b></td>
            <td><b>Webinars</b></td>
            td><input type='number'  name='Webinars' value='value4'></td>
        </tr>
        <tr>
            <td><b>5</b></td>
            <td><b>Paper Presentations</b></td>
            <td><input type='number'  name='paper_presentation' value='value5'></td>
        </tr>
    </table>";
    }
    else  
    {
          echo"<table>
        <tr>
            <td colspan='20'>
            <center><b>List of Events Registered</b></center>
            </td>
        </tr>
        <tr>
            <td><b>E.No</b></td>
            <td><b>Event</b></td>
            <td><b>Count</b></td>
        </tr>
        <tr>
            <td><b>1</b></td>
            <td><b>Hackathons</b></td>
            <td><input type='number'  name='Hackathon' value='value1'></td>
        </tr>
        <tr>
            <td><b>2</b></td>
            <td><b>Ideathons</b></td>
            <td><input type='number'  name='ideathons' value='value2'></td>
        </tr>
        <tr>
            <td><b>3</b></td>
            <td><b>Workshops</b></td>
            <td><input type='number'  name='Workshops' value='value3'></td>
        </tr>
        <tr>
            <td><b>4</b></td>
            <td><b>Webinars</b></td>
            <td><input type='number'  name='Webinars' value='value4'></td>
        </tr>
        <tr>
            <td><b>5</b></td>
            <td><b>Paper Presentations</b></td>
            <td><input type='number'  name='paper_presentation' value='value5'></td>
        </tr>
    </table>";
    }
    }
    }
        ?>
</body>
</html>

<?php require 'footer.php';?>
<?php

    }else{
    echo header("Location:index.php");
}
