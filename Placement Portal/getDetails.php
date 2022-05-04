<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php
include 'dbconfig.php'
?>

<div id="Showcase">
<?php       
//$dept=filter_input(INPUT_POST,"dept");
$dept=$_GET["dept"];
$sql="SELECT dc_id,dc__name,mobile_no,dept,Address from dept_coordinator where dept='$dept'";
$result= mysqli_query($conn,$sql);


echo "<table class='w3-table-all w3-round'>
    <tr class='w3-blue'>
    <td>ID</td>
    <td>Name</td>
    <td>Mobile</td>
    <td>Department</td>
    <td>Address</td>
    </tr>";
$count=0;
while($row = mysqli_fetch_array($result)) {
  $count++;
  echo "<tr>";
  echo "<td>" . $row['dc_id'] . "</td>";
  echo "<td>" . $row['dc__name'] . "</td>";
  echo "<td>" . $row['mobile_no'] . "</td>";
  echo "<td>" . $row['dept'] . "</td>";
  echo "<td>" . $row['Address'] . "</td>";
  echo "</tr>";
}
if($count==0){
    echo "<tr>";
  echo "<td colspan='7'>" . 'No Details' . "</td>";
  
  echo "</tr>";
}
echo "</table>";
  

mysqli_close($conn);


?>
   

</form>
</div>

</body>
</html>
