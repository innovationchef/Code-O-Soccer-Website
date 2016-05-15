<?php
include 'connection.php';
//include 'core.inc.php';
//

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) )
echo 'already loggedin';
else
{
if(isset($_POST['teamname']) && isset($_POST['password']))
{//isset starts
$teamname = trim(htmlentities($_POST['teamname']));
$password = trim(htmlentities($_POST['password']));
$password_hash = md5($password); //Hash_Password Contains Hash Of String 'password'

 if(!empty($teamname) && !empty($password))
{//!empty starts
 $query = "SELECT `id` FROM `krssgzj9_registration`.`users` WHERE `teamname` = '".mysql_real_escape_string($teamname)."' AND `password` = '".mysql_real_escape_string($password_hash)."'";
$query2 = "SELECT `member1_name` FROM `krssgzj9_registration`.`users` WHERE `teamname` = '".mysql_real_escape_string($teamname)."' AND `password` = '".mysql_real_escape_string($password_hash)."'";

if($query_run = mysql_query($query))
{//query_run success starts
 $query_num_rows = mysql_num_rows($query_run);

 if($query_num_rows == 0)
{//invalid entry starts
?>
<script type="text/javascript">
   alert("Please enter a valid username/password.");
   history.back();
</script>
<?php
  }//invalid entry ends
 else if($query_num_rows == 1)
{//valid entry starts
		 $user_id = mysql_result($query_run,0,'id');
		
		session_start();
		 $_SESSION['user_id']= $user_id;
		 session_write_close();
		?>
<script type="text/javascript">
   alert("Logged in!");
   history.back();
</script>
<?php
}//valid entry ends
else
{//error1 starts
?>
<script type="text/javascript">
   alert("Error!");
   history.back();
</script>
<?php	
  }//error1 ends
}//query_run success ends
else
{//query_run error starts
?>
<script type="text/javascript">
   alert("Please try again later.");
   history.back();
</script>
<?php
	}//query_run error ends
}//!empty ends
else
{//empty starts
?>
<script type="text/javascript">
   alert("Please enter the values.");
   history.back();
</script>
<?php
}//empty ends
}//isset ends
else
{//!isset starts
?>
<script type="text/javascript">
   alert("Please enter the values.");
   history.back();
</script>
<?php
}//!isset ends
}
?>