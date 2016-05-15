<?php
   require 'connection.php';
   //require 'core.inc.php';
   
		session_start();
   if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) ){//loggedin() starts

   if(isset($_POST['member1_name'])&& isset($_POST['member1_college'])&& isset($_POST['member1_email'])&& isset($_POST['member1_phone'])&& isset($_POST['member1_year']) )
   {//isset starts
   $member1_name = trim(htmlentities($_POST['member1_name']));
   $member1_college = trim(htmlentities($_POST['member1_college']));
   $member1_email = trim(htmlentities($_POST['member1_email']));
   $member1_phone = trim(htmlentities($_POST['member1_phone']));
   $member1_year = trim(htmlentities($_POST['member1_year']));
   
   if(!empty($member1_name) &&!empty($member1_college) &&!empty($member1_email) &&!empty($member1_phone) &&!empty($member1_year)  ){//!empty() starts
     if(strlen($member1_name)>30 || strlen($member1_college)>30 || strlen($member1_email)>30 || strlen($member1_phone)!=10 || strlen($member1_year)>30 )
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
  if (preg_match("/^[a-zA-Z ]*$/",$member1_name)){
  if(filter_var($member1_email, FILTER_VALIDATE_EMAIL)){
    
$query="UPDATE `krssgzj9_registration`.`users` SET `member1_name` = '".mysql_real_escape_string($member1_name)."', `member1_college` = '".mysql_real_escape_string($member1_college)."', `member1_email` = '".mysql_real_escape_string($member1_email)."', `member1_phone` = '".mysql_real_escape_string($member1_phone)."', `member1_year` = '".mysql_real_escape_string($member1_year)."' WHERE `krssgzj9_registration`.`users`.`id` = ".$_SESSION['user_id']."";   
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