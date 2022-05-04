<?php
session_start();
?>
<script>
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    

require 'vendor/autoload.php';
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';</script>
<?php
include 'dbconfig.php';
$email=$_POST['loginEmail'];

//$sql="select exists(select * from logindetails where email='$email')";
//$res = mysqli_query($conn, $sql);

$ch = "SELECT * FROM logindetails WHERE email='".$email."'";
$res = mysqli_query($conn, $ch);
if(mysqli_num_rows($res)>0){ 
    echo "<script>alert('reached')</script>";
//if($res==1)
//{
//    
    $sql="select email,password from logindetails where email='".$email."'";
    $select=mysqli_query($conn,$sql);
    $msg = "Mail Sent";
    ini_set("SMTP","localhost");
    ini_set("smtp_port","3306");

    $mail_sent=mail("19wh1a0588@bvrithyderabad.edu.in","My subject",$msg);
    if($mail_sent==true){
    echo "<script>alert('mail sent')</script>";
    }else{
        echo "<script>alert('Please try again')</script>";
    }
//    while($row=mysqli_fetch_array($select))
//    {
//      $email=md5($row['email']);
//      $pass=md5($row['password']);
//    }
//    $link="<a href='www.samplewebsite.com/reset.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
//    require_once('phpmailer/PHPMailerAutoload.php');
//    $mail = new PHPMailer;
//    $mail_CharSet =  "utf-8";
//    $mail_IsSMTP();
//    // enable SMTP authentication
//    $mail_SMTPAuth = true;                  
//    // GMAIL username
//    $mail_Username = "your_email_id@gmail.com";
//    // GMAIL password
//    $mail_Password = "your_gmail_password";
//    $mail_SMTPSecure = "ssl";  
//    // sets GMAIL as the SMTP server
//    $mail_Host = "smtp.gmail.com";
//    // set the SMTP port for the GMAIL server
//    $mail_Port = "465";
//    $mail_From='your_gmail_id@gmail.com';
//    $mail_FromName='your_name';
//    $mail_AddAddress('reciever_email_id', 'reciever_name');
//    $mail_Subject  =  'Reset Password';
//    $mail_IsHTML(true);
//    $mail_Body    = 'Click On This Link to Reset Password '.$pass.'';
//    if($mail_Send())
//    {
//      echo "Check Your Email and Click on the link sent to your email";
//    }
//    else
//    {
//      echo "Mail Error - >".$mail_ErrorInfo;
//    }
  }
 
    

else{
    
        echo "<script>alert('Invalid Login');window.location = 'forget_pwd.php'</script>"; 
   
}
 
 ?>