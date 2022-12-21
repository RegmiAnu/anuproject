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
$server= "localhost";
$username= "root";
$password= "";
$dbname="travel";

$conn =mysqli_connect($server, $username, $password, $dbname);

if ($conn-> connect_error)
{
  die ("Connection failed:". $conn -> connect_error);
}
  $sql= "SELECT * FROM destinations" ;
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
        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";
      
        echo "<td>" . $row['image'] . "</td>";
      
        echo "<td>" . $row['listtitle'] . "</td>";
      
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['location'] . "</td>";
        echo "<td>" . $row['subject'] . "</td>";
        echo "<td> <a onClick=\"javascript: return confirm('Are you sure you want to delete');\"/href='delete.php?id=".$row['id']." '>Delete</a></td>";

        //echo '<td>  <a href="delete.php?id='.$row['id'].' ">delete</a>';

        echo '<td> <a href="edit.php?id='.$row['id'].' ">update</a>';
        

        echo "</tr>";
      
        }
      
      echo "</table>";

$conn-> close();
    }
    else {
      echo "no data";
    }
    
 ?>
 </center>
 

    <form action="adminpage.php">
     <center> <h3><button>Home</button></h3></center>
     
    </form>
</body>
</html>