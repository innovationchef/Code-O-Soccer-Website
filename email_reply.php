<?php
   
if(isset($_POST['password'])&& isset($_POST['message']) && isset($_POST['email']))
   {//isset starts
   $message = $_POST['message'];
   $password = $_POST['password'];
   $email = $_POST['email'];
   if(!empty($password) &&!empty($email) &&!empty($message) ){//!empty() starts
     if($password=="fuckyoubitch")
{//pass right starts
        $formcontent=$message;
	$recipient = $email;
	$subject = "Reply Form Code-o-Soccer";
	$mailheader = "From: contactus@krssg.in \r\n";
	
mail($recipient, $subject, $formcontent, $mailheader) or die("Error! Contact the admin");
?>

<script type="text/javascript">
   alert("Sent");
</script>
<?php
}
else

{//pass not match starts
?>

<script type="text/javascript">
   alert("Password Wrong");
</script>
<?php

}//pass not match ends
	}

   else
	{//empty starts
?>
<script type="text/javascript">
   alert("Please enter all the values.");
</script>
<?php
	}//empty ends
	}//isset ends
   else
	{//!isset starts
?>
<script type="text/javascript">
   alert("Please enter all the values.");
</script>
<?php
	}//!isset ends

?>

<form action="<?php echo $current_file; ?>" method="POST">
E-Mail addr to be sent to: <input type="text" name="email" > 
Password: <input type="password" name= "password">
<br>
Message: <input type="text" name= "message" style="line-height: 500px" size="100">

<input type="submit" value="submit">
</form>
