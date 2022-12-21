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
tr{
 
  padding:6px;
  margin:4px;
  color:black;
  height:10vh;
}
th{
  padding:4px;
  
}
a{
  text-decuration:none;
  background-color:red;
  padding:4px;
  margin:4px;
  border-radius:1rem;
  color:white;
}
a:hover{
  background-color:green;
  color:white;
}
h3 th{
  margin:4px;
}
button{
  padding:6px;
  margin:8px;
  border-radius:1rem; 
}
</style>
</head>
<body>
  <center>
  <?php
include "db.php";
  $sql= "SELECT * FROM bookings" ;
  $result= $conn-> query($sql);
  if($result-> num_rows > 0)
  {
    echo "<table border='1'>

    <tr>
    
    <h3><th>id</th></h3>
    
   <h3> <th>name</th></h3>
    
    <h3><th>email</th></h3>
    
   <h3> <th>phone</th><h3>
   <h3> <th>address</th><h3>
   <h3> <th>location</th><h3>
   <h3> <th>guests</th><h3>
   <h3> <th>arrivals</th><h3>
   <h3> <th>leaving</th><h3>
   <h3> <th>Action</th><h3>
    
    </tr>";
    
     
      while ( $row=$result-> fetch_assoc() )
      {
        echo "<tr>";
        
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
      
        echo "<td>" . $row['email'] . "</td>";
      
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['location'] . "</td>";
        echo "<td>" . $row['guests'] . "</td>";
        echo "<td>" . $row['arrivals'] . "</td>";
        echo "<td>" . $row['leaving'] . "</td>";
        echo "<td> <a  onClick=\"javascript: return confirm('Are you sure you want to delete');\"/href='delete.php?id=".$row['id']." '>Delete</a></td>";

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