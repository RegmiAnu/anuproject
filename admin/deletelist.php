
<center>
<?php

include "connect.php";?>
<br><br><br><?php
$sql="SELECT  id, image, listtitle , city, location, subject FROM  destinations ";
$result= $conn-> query($sql);
if ($result-> num_rows > 0)
{

  echo"<h1>List of Destinations</h1>";

  echo "<table border='4'>

  <tr>
  <th>id</th>
  <th>image</th>
  <th>listtitle</th>
  
  <th>city</th>
  
  <th>Location</th>
  
  <th>subject</th>
  <th> Delete </th>

  
  </tr>";
  
   
  
  while($row =$result-> fetch_assoc())
  
    {
  
    echo "<tr>";
    echo "<td>" . $row['id'] .   "</td>";
    echo "<td>" . $row['image'] .   "</td>";
    echo "<td>" . $row['listtitle'] .   "</td>"; 
  
    echo "<td>" . $row['city'] . "</td>";
  
    echo "<td>" . $row['location'] . "</td>";
  
    echo "<td>" . $row['subject'] . "</td>";
     echo "<td> <a onClick=\"javascript:return confirm('Are you sure you want to delete');\"/href='delete.php?id=".$row['id']."'><b> Delete</b></a></td>";

   // echo  ' <td> <a href="delete.php?id='.$row['id'].' "><b>Delete<b></a>' ; 

    // echo  ' <td> <a href="edit.php?id='.$row['id'].' "><b>Edit<b></a>' ; 

    echo "</tr>";
  
    }
  
  echo "</table>";
  
   
    
    
    
}



if(isset($_GET['id']))
{
    $sql="DELETE FROM listings WHERE id= '".($_GET['id'])."' ";

   
    if(mysqli_query($conn,$sql))
    {
       echo "sucessfully Deleted";
    }
    
}


$conn -> close();
?>
</center>
















