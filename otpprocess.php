
<?php
session_start();
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
$otp=$_SESSION['otp'];
   
    if(isset($_POST['submit1'])){
      if($_POST["otpvalue"]==$otp){
      	phpAlert( "OTP is matched");
      	echo "success";

      }
      	else{
      		
      		phpAlert( "OTP is not matched");
      	    echo "sorry your otp doesnt match";
      	}
     }
?>