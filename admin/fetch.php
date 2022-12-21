<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="Stylesheet" href="style.css">
    <style> #form{
        background-color:white;

    }
body{
    color:black;
    background-color:lightblue;
    background-image:url(nature2.png);
}
</style>
</head>
<body>
  <center>
  <?php
include "db.php";
  $sql= "SELECT id, name, email, phoneno, message FROM travels" ;
  $result= $conn-> query($sql);
  if($result-> num_rows > 0)
  {
    echo "<table border='1'>

    <tr>
    
    <h3><th>id</th></h3>
    
   <h3> <th>name</th></h3>
    
    <h3><th>email</th></h3>
    
   <h3> <th>phoneno</th><h3>
   <h3> <th>message</th><h3>
   <h3> <th>Action</th><h3>
    
    </tr>";
    
     
      while ( $row=$result-> fetch_assoc() )
      {
        echo "<tr>";
        
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
      
        echo "<td>" . $row['email'] . "</td>";
      
        echo "<td>" . $row['phoneno'] . "</td>";
        echo "<td>" . $row['message'] . "</td>";
        
        echo "<td> <a onClick=\"javascript: return confirm('Are you sure you want to delete');\"/href='delete.php?id=".$row['id']." '>Delete</a></td>";

        //echo '<td>  <a href=".php?id='.$row['id'].' ">delete</a>';

        echo '<td> <a href=".php?id='.$row['id'].' ">update</a>';
        

        echo "</tr>";
      
        }
      
      echo "</table>";

$conn-> close();
    }
    
 ?>
 </center>
 

    <form action="adminpage.php">
     <center> <h3><button>Home</button></h3></center>
     
    </form>
</body>
</html>