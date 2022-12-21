<?php
include "db.php";
  if(isset($_GET['id']))
{
   
  $sql="DELETE FROM destinations WHERE ID= '".($_GET['id'])."' ";
  $run =mysqli_query($conn,$sql); 
  if($run)
    {
      header("location:deletelist.php");
    }
}
?>