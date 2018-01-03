<?php include "header.php" ?>

<?php
session_start();
 session_start();
if (isset($_SESSION['email']) == FALSE){
     header("Location:index.php");
} 
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
phpAlert(   "OTP has been send"   ); 
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
$otp=$_SESSION['otp'];
   ?>

<br>
<br>
<br>
<div class="container" id="form1">
  <br>
  <br>
   <form action="otpprocess.php" method="post">
     <div class="form-group">
     <label for="OTP">OTP:</label>
     <input type="text" class="form-control" id="otpvalue" name="otpvalue" required>
    </div>
   <div class="form-check">
   </div>
   <button type="submit" class="btn btn-primary" style="background-color:#26a69a;" name="submit1" value="submit1">Submit</button>
</form>
<br>
<br>
</div>

<?php include "footer.php" ?>
