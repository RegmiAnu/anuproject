<?php
error_reporting(0);
include "db.php";
 
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    echo "hi";
 
$adminmail = $_POST['username'];
$adminpassword = $_POST['password'];
 
$sql= "SELECT name address phone img  FROM adminlogin where $adminname ='name' && $adminpassword ='password' "; 
$result= $conn-> query($sql);
if ($result-> num_rows > 0)
{
 
   header("location:/admin/adminpage.php");
 
}
else {
    echo"error! wrong name and password ";
}
}
?>
