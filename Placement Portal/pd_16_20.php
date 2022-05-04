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
    <link rel = "icon" href = "../images/logo.jpg" type = "image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
          
                table {
                    font-family: TimesNewRoman, sans-serif;
                    font-size: 44pt;
                    border-collapse: collapse;
                    width: 100%;
                }

                td, th {
                    border: 3px solid #dddddd;
                    text-align: center;
                    padding: 55px;
                    font-size:16pt;
                }

                tr:nth-child(even) {
                    background-color: #dddddd;
                }
</style>

    <body>

    <nav class="w3-sidebar w3-fixed  w3-bar-block w3-collapse  w3-card w3-light-grey" style="z-index:13;width:250px;" id="mySidebar">
    <a class="w3-bar-item w3-button w3-border-bottom w3-large w3-mobile" href="TPOdashboard.php" >  <img class="w3-image" src="../images/logo.jpg" alt="Architecture" width="100" height="40">
    </a>
    <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  
    <a class="w3-bar-item w3-button w3-teal" href="TPODashboard.php">Dashboard</a>
    
    
    <a class="w3-bar-item w3-button" href="profile.php">Profile</a>
    <a class="w3-bar-item w3-button" href="centralTeam.php">Central Team</a>
    <a class="w3-bar-item w3-button" href="placementDetails.php">Placement Details</a>
    
    <a class="w3-bar-item w3-button" href="companies.php">Companies</a>
    <a class="w3-bar-item w3-button" href="trainings.php">Trainings</a>
    <a class="w3-bar-item w3-button" href="internships.php">Internships</a>
    <a class="w3-bar-item w3-button" href="mentorships.php">Mentorships</a>
    
    
    <a class="w3-bar-item w3-button w3-teal" href="../logout.php">Logout</a>
  
    </nav>
    <div id="myTop" class="w3-container  w3-theme w3-large">
        <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
        
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
            }
            else 
            {
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

<div class="w3-container" style="margin-left: 250px">
    <div class="w3-section">
        <table>
            <tr>
                <td>Amazon<br>
                    30 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>American Express<br>
                    21.3 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Providence<br>
                    15 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
                <td>Factset<br>
                    14 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>Flipkart<br>
                    13.2 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Cognizant<br>
                    10 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
            </tr>
            <tr>
                <td>Amazon<br>
                    30 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>American Express<br>
                    21.3 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Providence<br>
                    15 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
                <td>Factset<br>
                    14 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>Flipkart<br>
                    13.2 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Cognizant<br>
                    10 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
            </tr>
            <tr>
                <td>Amazon<br>
                    30 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>American Express<br>
                    21.3 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Providence<br>
                    15 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
                <td>Factset<br>
                    14 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>Flipkart<br>
                    13.2 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Cognizant<br>
                    10 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
            </tr>
            <tr>
                <td>Amazon<br>
                    30 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>American Express<br>
                    21.3 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Providence<br>
                    15 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
                <td>Factset<br>
                    14 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>Flipkart<br>
                    13.2 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Cognizant<br>
                    10 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
            </tr>
            <tr>
                <td>Amazon<br>
                    30 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>American Express<br>
                    21.3 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Providence<br>
                    15 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
                <td>Factset<br>
                    14 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>Flipkart<br>
                    13.2 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Cognizant<br>
                    10 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
            </tr>
            <tr>
                <td>Amazon<br>
                    30 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>American Express<br>
                    21.3 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Providence<br>
                    15 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
                <td>Factset<br>
                    14 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>Flipkart<br>
                    13.2 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Cognizant<br>
                    10 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
            </tr>
            <tr>
                <td>Amazon<br>
                    30 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>American Express<br>
                    21.3 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Providence<br>
                    15 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
                <td>Factset<br>
                    14 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>Flipkart<br>
                    13.2 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Cognizant<br>
                    10 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
            </tr>
            <tr>
                <td>Amazon<br>
                    30 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>American Express<br>
                    21.3 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Providence<br>
                    15 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
                <td>Factset<br>
                    14 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>Flipkart<br>
                    13.2 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Cognizant<br>
                    10 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
            </tr>
            <tr>
                <td>Amazon<br>
                    30 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>American Express<br>
                    21.3 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Providence<br>
                    15 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
                <td>Factset<br>
                    14 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>Flipkart<br>
                    13.2 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Cognizant<br>
                    10 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
            </tr>
            <tr>
                <td>Amazon<br>
                    30 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>American Express<br>
                    21.3 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Providence<br>
                    15 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
                <td>Factset<br>
                    14 LPA<br>
                    CSE–1<br>
                    TOTAL–1</td>
                <td>Flipkart<br>
                    13.2 LPA<br>
                    ECE–1<br>
                    TOTAL–1 </td>
                <td>Cognizant<br>
                    10 LPA<br>
                    CSE–1<br>
                    TOTAL-1</td>
            </tr>
        </table>
</div>
</div>

</body>
</html> 


<?php
}else{
    echo header("Location:index.php");
}
?>