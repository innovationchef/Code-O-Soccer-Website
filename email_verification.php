<?php
   
session_start();
require 'connection.php';
   
   //require 'core.inc.php';
   if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) ){//loggedin() starts

   if(isset($_POST['veri_response']))
   {//isset starts
   $response = trim(htmlentities($_POST['veri_response']));
   
   if(!empty($response) ){//!empty() starts

     if(strlen($response)>5 )
     {//strlen() wrong starts
?>
<script type="text/javascript">
   alert("Please abide to given sizes of the fields.");
   history.back();
</script>
<?php
     }//strlen() wrong ends
     else
   {  //strlen() right starts

$query = "SELECT `email_verification` FROM `krssgzj9_registration`.`users` WHERE `id` = ".$_SESSION['user_id']." ";
 if($query_run = mysql_query($query))
  $original = mysql_result($query_run,0,'email_verification');
 
    if($response==$original)//right response
   {
$to_set=strval(-1);
   $queryn="UPDATE `krssgzj9_registration`.`users` SET `email_verification` = '".mysql_real_escape_string($to_set)."' WHERE `users`.`id` = ".$_SESSION['user_id']."";

 if($query_run_n = mysql_query($queryn))
	{//query run sucessful starts
   ?>
<script type="text/javascript">
   alert("Email Veriication Successful!! Happy Hacking!!");
   history.back();
</script>
<?php	
   }//query run sucessful ends
 else
 {//query run unsuccessful starts
   ?>
<script type="text/javascript">
   alert("Verification Failed .. Try Again Later or Contact the Admin.");
   history.back();
</script>
<?php
   }//query run unsuccessful ends
   }//right response ends
else//wrong response
{
?>
<script type="text/javascript">
   alert("Please ender the right code!!");
   history.back();
</script>
<?php
}//wrong response ends

   }//strlen() right ends
   }//!empty() ends
	else 
	{//empty() starts
?>
<script type="text/javascript">
   alert("All Fields Are Required empty.");
   history.back();
</script>
<?php
	}//empty() ends
   }//isset ends
   
   else {//!isset starts

   ?>
<script type="text/javascript">
   alert("All Fields Are Required isset.");
	history.back();
</script>
<?php
   }//!isset ends


   }//loggedin ends
else//!loggedin starts
{
?>
<script type="text/javascript">
   alert("Please Login to continue.");
	history.back();
</script>
<?php
}//!loggedin ends
   ?>