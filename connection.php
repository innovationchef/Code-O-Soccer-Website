<?php
//error_reporting (!E_NOTICE);
$host = 'localhost';
$user = 'krssgzj9_lohani';
$pass = 'krssg2014';
$error_msg = 'Failed To Connect To Database';
$db_name = 'krssgzj9_registration';
if(!mysql_connect($host, $user, $pass) ){
	if( !mysql_select_db($db_name))
		{die($error_msg);echo "error in connection man..!! Contact the admin";}
}
//echo "in here man...wtf is happening";
//error_reporting(E_ALL);

?>
