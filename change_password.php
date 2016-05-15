<?php
   session_start();
   require 'connection.php';
   if(loggedin()){//loggedin() starts

   if(isset($_POST['password'])&& isset($_POST['newpassword'])&& isset($_POST['cpassword']))
   {//isset starts
   $password = trim(htmlentities($_POST['password']));
   $newpassword = trim(htmlentities($_POST['newpassword']));
   $cpassword = trim(htmlentities($_POST['cpassword']));
   
   if(!empty($password) &&!empty($cpassword) &&!empty($newpassword) ){//!empty() starts
     if(strlen($password)>30 || strlen($cpassword)>30 || strlen($newpassword)>30 )
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
if($newpassword==$cpassword)
{//pass match
$old=md5($password);
    $query = "SELECT `teamname` FROM `krssgzj9_registration`.`users` WHERE `id` = ".$_SESSION['user_id']." && `password` = '$old'";
     $query_run = mysql_query($query);
///////
/////
/////CHANGE FROM HERE


     if(mysql_num_rows($query_run) == 1)
	{//teamname exists starts
$new=md5($newpasssword);
$query="UPDATE `krssgzj9_registration`.`users` SET `password`= '".mysql_real_escape_string($new)."'  WHERE `users`.`id` = ".$_SESSION['user_id']."";   
 if($query_run = mysql_query($query))
	{//query run sucessful starts
   ?>
<script type="text/javascript">
   alert("Password Change Successful!! Happy Hacking!!");
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
  }//pass match ends
else//pass not match start
{
   ?>
<script type="text/javascript">
   alert("The two passwords do not match. Try Again.");
   history.back();
</script>
<?php

}//pass not match ends
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
   }//isset ends
   
   else {//!isset starts

   ?>
<script type="text/javascript">
   alert("All Fields Are Required.");
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