<?php
session_start();// Starting Session
?>


        <?php
            $faculty_id=$_POST["Faculty_Id"];
            $faculty_name=$_POST["Faculty_name"];
            $dept=$_POST["Dept"];
            $mobile_number=$_POST["mobile_no"];
            $perm_address=$_POST["Permanent_Address"];
            $comm_address=$_POST["Communication_address"];
            $role_id=$_POST["Role_Id"];
            $blood_group=$_POST["Blood_group"];
            
            
           
           if($_POST["Faculty_Id"]=="" && $_POST["Faculty_name"]==""){  
                 echo "<script>alert('Registration  Fail - Please try again');window.location = 'TPODashboard.php'</script>"; 
           }else{
               try{
                   include '../dbconfig.php';		



                  $sql="INSERT INTO faculty(Faculty_Id,Faculty_name,Dept,mobile_no,Permanent_Address,Communication_address,Role_id,Blood_group) VALUES (?,?,?,?,?,?,?,?)";
                  echo mysqli_error($conn);
                  $stmt = mysqli_prepare($conn, $sql);
                  mysqli_stmt_bind_param($stmt, "ississis", $faculty_id,$faculty_name,$dept,$mobile_number,$comm_address,$perm_address,$role_id,$blood_group);  
                  if(mysqli_stmt_execute($stmt)){
                     //  $last_id = mysqli_insert_id($conn);
                      // echo "the id is".$last_id;
                    echo "<script>alert('Registration is Successful');window.location = 'TPODashboard.php'</script>"; 
                  } 
           }
           catch(TypeError $ex)
           {
                   echo $ex->getMessage();
           }
                 echo mysqli_error($conn);
                 mysqli_close($conn);
      
            }
        ?>
