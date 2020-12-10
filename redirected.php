<!DOCTYPE html>
<html>
<body>
<?php
if ($_SESSION['admin'] != "admin"){
	 header("Location: login.php");
 exit;
 }
else echo 'You are admin!</p>';
 
?>
</body>
</html>