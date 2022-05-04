<?php 
session_start();
?>
<?php
 include("dbconfig.php");
 echo 'connected';
	$query="select * from logindetails where email='".$_POST['loginEmail']."' and password='".$_POST['pwd']."'";
        $result = mysqli_query($conn,$query) or  die('Could not look up user information; ' . mysqli_error($conn));
	if(mysqli_num_rows($result) && $row = mysqli_fetch_assoc($result)){
                $_SESSION['uname']=$_POST['loginEmail'];
                if($row['role_id']=="4"){
                    echo header("Location:studentcontainer.php");
                }else if($row['role_id']=="3"){
                    echo header("Location:Facultycontainer.php");
                }else if($row['role_id']=="2"){
                    echo header("Location:deptCordinat.php");
                }else if($row['role_id']=="1"){
                    echo header("Location:admin/adminDashboard.php");
                }else{
                    echo header("Location:index.php");
                }
	}
	else{
		echo header("Location:index.php");
        }
         mysqli_close($conn);
?>
</body>
</html>