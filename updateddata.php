
<?php
include "connect.php";
$sql= "SELECT * FROM destination" ;
  $result= $conn-> query($sql);
  if($result-> num_rows > 0)
  {
    echo "<table border='1'>

    <tr>
    
    <h3><th>id</th></h3>
    
   <h3> <th>image</th></h3>
    
    <h3><th>listtitle</th></h3>
    
   <h3> <th>city</th><h3>
   <h3> <th>location</th><h3>
   <h3> <th>subject</th><h3>
    
    </tr>";
    
     
      while ( $row=$result-> fetch_assoc() )
      {
?>        <img src="./admin/<?php echo $row['image']  ?> "alt='<?php echo $row['image']; ?>' height=300, width=400 ><?php
       
     
        echo "</tr>";
      
        }
      
      echo "</table>";

$conn-> close();
    }
    
 ?>
 