<?php
   
if(isset($_POST['lname'])&& isset($_POST['message']) && isset($_POST['fname'])&& isset($_POST['email'])&& isset($_POST['phone']))
   {//isset starts
   $message = $_POST['message'];
   $lname = $_POST['lname'];
   $fname = $_POST['fname'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   if(!empty($lname) &&!empty($fname) &&!empty($email) &&!empty($phone) &&!empty($message) ){//!empty() starts
     $formcontent="From: $fname $lname \n Message: $message \n Phone $phone \n Email $email";
	$recipient = "codeosoccer2015@gmail.com";//hard coded
	$subject = "Contact Form Code-o-Soccer";
	$mailheader = "From: contactus@krssg.in \r\n";
	
mail($recipient, $subject, $formcontent, $mailheader) or die("Error! Contact the admin");
?>

<script type="text/javascript">
   alert("Hack the breath. You will be soon contacted.");
   history.back();
</script>
<?php
	}
   else
	{//empty starts
?>
<script type="text/javascript">
   alert("Please enter all the values.");
   history.back();
</script>
<?php
	}//empty ends
	}//isset ends
   else
	{//!isset starts
?>
<script type="text/javascript">
   alert("Please enter all the values.");
   history.back();
</script>
<?php
	}//!isset ends

?>
