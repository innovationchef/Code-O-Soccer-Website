<?php
   require 'connection.php';
   //require 'core.inc.php';
   
		session_start();
   if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) ){//loggedin() starts

   if(isset($_POST['member4_name'])&& isset($_POST['member4_college'])&& isset($_POST['member4_email'])&& isset($_POST['member4_phone'])&& isset($_POST['member4_year']) )
   {//isset starts
   $member4_name = trim(htmlentities($_POST['member4_name']));
   $member4_college = trim(htmlentities($_POST['member4_college']));
   $member4_email = trim(htmlentities($_POST['member4_email']));
   $member4_phone = trim(htmlentities($_POST['member4_phone']));
   $member4_year = trim(htmlentities($_POST['member4_year']));
   
   if(!empty($member4_name) &&!empty($member4_college) &&!empty($member4_email) &&!empty($member4_phone) &&!empty($member4_year)  ){//!empty() starts
     if(strlen($member4_name)>30 || strlen($member4_college)>30 || strlen($member4_email)>30 || strlen($member4_phone)!=10 || strlen($member4_year)>30 )
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
  if (preg_match("/^[a-zA-Z ]*$/",$member4_name)){
  if(filter_var($member4_email, FILTER_VALIDATE_EMAIL)){
    
$query="UPDATE `krssgzj9_registration`.`users` SET `member4_name` = '".mysql_real_escape_string($member4_name)."', `member4_college` = '".mysql_real_escape_string($member4_college)."', `member4_email` = '".mysql_real_escape_string($member4_email)."', `member4_phone` = '".mysql_real_escape_string($member4_phone)."', `member4_year` = '".mysql_real_escape_string($member4_year)."' WHERE `krssgzj9_registration`.`users`.`id` = ".$_SESSION['user_id']."";   
 if($query_run = mysql_query($query))
	{//query run sucessful starts
   ?>
<script type="text/javascript">
   alert("Member Registration Successful!! Happy Hacking!!");
   history.back();
</script>
<?php	
   }//query run sucessful ends
 else
 {//query run unsuccessful starts
   ?>
<script type="text/javascript">
   alert("Registration Failed .. Try Again Later");
   history.back();
</script>
<?php
   }//query run unsuccessful ends
   }//email check ends
   else{
         ?>
         <script type="text/javascript">
         alert("Give a proper email.");
         history.back();
         </script>
         <?php 
         }//If not valid email
   }//name check ends 
   else{
         ?>
         <script type="text/javascript">
         alert("Give a valid name.");
         history.back();
         </script>
         <?php     
         }//if not valid name
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
   alert("Please Login to hack.");
	history.back();
</script>
<?php
}//!loggedin ends
   ?>