<html>
<head>
<title>Reset password</title>
<link rel='stylesheet' href='style.css' type='text/css' media='all' />
</head>
<body>
<div style="width:700px; margin:50px auto;">

<h2>Reset password</h2>
    <?php
    $con = mysqli_connect("localhost","vtsgirls","0YCwZkm7CYIQ7Ur","vtsgirls");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
    }

    date_default_timezone_set('Europe/Belgrade');
    $error="";
    ?>
<?php

if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
  	$error .="<p>Invalid email address please type a valid email address!</p>";
	}else{
	$sel_query = "SELECT * FROM `users` WHERE email='".$email."'";
	$results = mysqli_query($con,$sel_query);
	$row = mysqli_num_rows($results);
	if ($row==""){
		$error .= "<p>No user is registered with this email address!</p>";
		}
	}
	if($error!=""){
	echo "<div class='error'>".$error."</div>
	<br /><a href='javascript:history.go(-1)'>Go Back</a>";
		}else{
	$expFormat = mktime(date("H"), date("i"), date("s"), date("m")  , date("d")+1, date("Y"));
	$expDate = date("Y-m-d H:i:s",$expFormat);
	$key = md5($email);
	$addKey = substr(md5(uniqid(rand(),1)),3,10);
	$key = $key . $addKey;

mysqli_query($con,
"INSERT INTO `users` (`email`, `key`, `expDate`) VALUES ('".$email."', '".$key."', '".$expDate."');");

$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="https://vtsgirls.proj.vts.su.ac.rs/adoption/login/forgotpassword/reset-password.php?key='.$key.'&email='.$email.'&action=reset" target="_blank">https://adoption/login/forgotpassword/reset-password.php?key='.$key.'&email='.$email.'&action=reset</a></p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   	
$output.='<p>Thanks,</p>';
$output.='<p>Admin</p>';
$body = $output; 
$subject = "Password Recovery";

$email_to = $email;
$fromserver = "noreply@yourwebsite.com";
require("PHPMailer/PHPMailerAutoload.php");
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = '99af22d5677297';
        $phpmailer->Password = 'afa8dc85eeb209';
$phpmailer->IsHTML(true);
$phpmailer->From = "noreply@yourwebsite.com";
$phpmailer->FromName = "Admin";
$phpmailer->Sender = $fromserver; // indicates ReturnPath header
$phpmailer->Subject = $subject;
$phpmailer->Body = $body;
$phpmailer->AddAddress($email_to);
if(!$phpmailer->Send()){
echo "Mailer Error: " . $phpmailer->ErrorInfo;
}else{
echo "<div class='error'>
<p>An email has been sent to you with instructions on how to reset your password.</p>
</div><br /><br /><br />";
	}

		}	

}else{
?>
<form method="post" action="" name="reset"><br /><br />
<label><strong>Enter Your Email Address:</strong></label><br /><br />
<input type="email" name="email" placeholder="username@email.com" />
<br /><br />
<input type="submit" value="Reset Password"/>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php } ?>


</body>
</html>