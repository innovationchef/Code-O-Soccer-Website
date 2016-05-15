<?php
//include 'core.inc.php';
session_start();
session_destroy();
?>
<script type="text/javascript">
   alert("Logged Out!");
   history.back();
</script>
<?php
?>