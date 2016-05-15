<?php
session_start();
   require 'connection.php';
   

$uploaded=$_FILES['file']['name'];
$type = $_FILES['file']['type'];
$tmp_name = $_FILES['file']['tmp_name'];
$extension = strtolower(substr($uploaded,strpos($uploaded,'.')+1));

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) ){//loggedin() starts
if(isset($uploaded))
{
	
$temp = explode(".", $_FILES["file"]["name"]);
$newfilename = $_SESSION['user_id'] . '.' . end($temp);
	if(!empty($uploaded)&& ($extension=='zip' ))
	{
	$location = 'uploads/';
	if(move_uploaded_file($tmp_name,$location.$newfilename))
	?>
<script type="text/javascript">
   alert("Uploaded");
   history.back();
</script>
<?php
	}

	else
	{
	?>
<script type="text/javascript">
   alert("Submit file of proper extension");
   history.back();
</script>
<?php
	}

}
else
{
?>
<script type="text/javascript">
   alert("An Error Occured. Contact the Admin please.");
   history.back();
</script>
<?php
}
}//logged in ends
else
{
?>
<script type="text/javascript">
   alert("Please Login to Submit.");
	history.back();
</script>
<?php
}

?>
