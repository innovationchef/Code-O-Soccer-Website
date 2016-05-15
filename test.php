<?php
   require 'connection.php';
   require 'core.inc.php';
   //if(!loggedin()){//loggedin() starts
echo "wtf";
  // if(isset($_POST['teamname'])&& isset($_POST['password'])&& isset($_POST['cpassword'])&& isset($_POST['quantity'])&& isset($_POST['member1_name']) && isset($_POST['member1_email']) && isset($_POST['member1_college']) && isset($_POST['member1_phone']))
  // {//isset starts
   $teamname = "nishant";
   $password = "nishant";
   $password_again = "nishant";
   $password_hash = md5($password);
   $quantity = "1";
   $member1_name = "nishant";
   $member1_email = "nishant@nishant.com";
   $member1_phone = "9987456321";
   $member1_college= "nishant";
	echo "in here man wtf arre you watching";
   if(!empty($teamname) &&!empty($password) &&!empty($password_again) &&!empty($member1_name) &&!empty($member1_email) &&!empty($member1_phone) &&!empty($member1_college) ){//!empty() starts
     if(((strlen($teamname)>11 || strlen($teamname)<6) || (strlen($password)>20 || strlen($password)<6)) || (strlen($member1_phone)!=10 || strlen($member1_college)>30))
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
	if($password!=$password_again)
	{//password doesnt match starts
?>
<script type="text/javascript">
   alert("Password Do Not Match.");
   history.back();
</script>
<?php
     }//password doesnt match ends
	 else 
	{//password match starts
     $query = "SELECT `teamname` FROM `users` WHERE `teamname` = '$teamname'";
     $query_run = mysql_query($query);
     if(mysql_num_rows($query_run) == 1)
	{//teamname exists starts
   ?>
<script type="text/javascript">
   alert("Sorry this teamname already exists with us. Please try with differnt teamname.");
   history.back();
</script>
<?php
   }//teamname exists ends
	 else 
	{//writing query starts
    $query = "INSERT INTO `users` (id,teamname,password,quantity,member1_name,member1_college,member1_email,member1_phone) VALUES('','".mysql_real_escape_string($teamname)."','".mysql_real_escape_string($password_hash)."','".$quantity."','".mysql_real_escape_string($member1_name)."','".mysql_real_escape_string($member1_college)."','".mysql_real_escape_string($member1_email)."','".mysql_real_escape_string($member1_phone)."')";
    if($query_run = mysql_query($query))
	{//query run sucessful starts
   ?>
<script type="text/javascript">
   alert("Registration Successful!! Happy Hacking!!");
   history.back();
</script>
<?php	
   }//query run sucessful ends
 else
 {//query run unsuccessful starts
   ?>
<script type="text/javascript">
   alert("Registration Failed .. Try Again Late.r");
   history.back();
</script>
<?php
   }//query run unsuccessful ends
   }//writing query ends
   }//password match ends
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
   alert("All Fields Are Required.");
   history.back();
</script>
<?php
}//empty() ends
 //  }//isset ends
  /* 
   else {//!isset starts

   ?>
<script type="text/javascript">
   alert("All Fields Are Required.");
	history.back();
</script>
<?php
   }//!isset ends
    */
  // }//!loggedin ends
  
   ?>