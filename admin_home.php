<center>
 <h1>Admin Page</h1>
    
 <h3>
 <?php
  session_start();

  if(!isset($_SESSION['admin_login'])) //check unauthorize user not direct access in "admin_home.php" page
  {
   header("location: ../index.php");  
  }

  if(isset($_SESSION['employee_login'])) //check employee login user not access in "admin_home.php" page
  {
   header("location: ../employee/employee_home.php"); 
  }

  if(isset($_SESSION['user_login'])) //check user login user not access in "admin_home.php" page
  {
   header("location: ../user/user_home.php");
  }
  
  if(isset($_SESSION['admin_login']))
  {
  ?>
   Welcome,
  <?php
   echo $_SESSION['admin_login'];
  }
  ?>
 </h3>
  <a href="../logout.php">Logout</a>
<br>
</br>
  <?php

$link = mysqli_connect('localhost', 'root', '', 'php_multiplelogin');

// echo 'DB Connection.....OK!<br>';

$query1 = mysqli_query($link, "SELECT * FROM masterlogin");

$myrow = mysqli_fetch_array($query1);

while($row=mysqli_fetch_array($query1))
{
echo $row['id'],' ', $row['username'],' ', $row['email'],' ', $row['role']. "<br />";
}

?>
</center>