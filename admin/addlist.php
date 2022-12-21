

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    *{
  box-sizing: border-box;

}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


/* Style the container/contact section */
.container-sm {
  float: center;
 background-color:darkcyan;
  background-size: cover;
  
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  color: white;
  font-size: large;
  
 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
    float: left;
  }
}
button{
  color:black;
  float: right;
}
button:hover{
  color:#45a049;
}

</style>

</head>

<body>
<div class=" container-sm ">
  <div style="text-align:center">
    <h2>Adding Details</h2>
    
  </div>
  
  <div class="row">
    <div class="column ">
      <img src="" style="width:100%">
    </div>
    <div class="column-md-8 ">
      <form action="" method="POST"  enctype="multipart/form-data">
                       <label>Image</label>
                       <input type="file"   name = "photo" >
      <label for="listtitle">Add Destination</label>
        <input type="text" id="listtitle" name="listtitle" placeholder=" Your destination name " required>
        
      
        <label for="city">City </label>
        <input type="text" id="city" name="city" placeholder=" city" required>
        
        <label for="location"> Location</label>
        <input type="text" id="location" name="location" placeholder=" location" required>
        
        
        
   
        <label for="subject">Description</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
         <center><button name="submit" class="btn btn-primary">submit</button></center>

      </form>
</br>
<br>
<br>
    </div>
  </div>
</div>
<?php
include "connect.php";

    if( isset($_POST['submit']) )

{ 
  // echo "hello";
    if( !empty($_POST['listtitle']) && !empty($_POST['city'])  && !empty($_POST['location']) && !empty($_POST['subject']) )
    {
         $file=($_FILES['photo']);
        // print_r ($_FILES['photo']);
        $listtitle=$_POST['listtitle'];
        $city=$_POST['city'];
        $location=$_POST['location'];
        $subject=$_POST['subject'];
 
        $filename = $file['name'];
        $filetmp = $file['tmp_name'];
        $destination = "./image/".$filename;
         move_uploaded_file($filetmp , $destination);


        $query="INSERT into destination(image, listtitle,  city, location,  subject) values('$destination','$listtitle','$city','$location', '$subject')";
        $run = mysqli_query($conn, $query);
        
        if($run)
        {
            echo"<h5> Your Listings Has Been Submitted</h5>";
        }
        else{
            echo "<h5> Your Listings Has Not Been Submitted </h5>";
        }
        
    }
    else{
        echo "<h5> Please Fill Up All The Details </h5>";
    }
}
?>
</br>

</body>
</html>
