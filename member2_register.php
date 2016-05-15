<?php
   require 'connection.php';
   //require 'core.inc.php';
   
		session_start();
   if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) ){//loggedin() starts

   if(isset($_POST['member2_name'])&& isset($_POST['member2_college'])&& isset($_POST['member2_email'])&& isset($_POST['member2_phone'])&& isset($_POST['member2_year']) )
   {//isset starts
   $member2_name = trim(htmlentities($_POST['member2_name']));
   $member2_college = trim(htmlentities($_POST['member2_college']));
   $member2_email = trim(htmlentities($_POST['member2_email']));
   $member2_phone = trim(htmlentities($_POST['member2_phone']));
   $member2_year = trim(htmlentities($_POST['member2_year']));
   
   if(!empty($member2_name) &&!empty($member2_college) &&!empty($member2_email) &&!empty($member2_phone) &&!empty($member2_year)  ){//!empty() starts
     if(strlen($member2_name)>30 || strlen($member2_college)>30 || strlen($member2_email)>30 || strlen($member2_phone)!=10 || strlen($member2_year)>30 )
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
  if (preg_match("/^[a-zA-Z ]*$/",$member2_name)){
  if(filter_var($member2_email, FILTER_VALIDATE_EMAIL)){
    
$query="UPDATE `krssgzj9_registration`.`users` SET `member2_name` = '".mysql_real_escape_string($member2_name)."', `member2_college` = '".mysql_real_escape_string($member2_college)."', `member2_email` = '".mysql_real_escape_string($member2_email)."', `member2_phone` = '".mysql_real_escape_string($member2_phone)."', `member2_year` = '".mysql_real_escape_string($member2_year)."' WHERE `krssgzj9_registration`.`users`.`id` = ".$_SESSION['user_id']."";   
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