
<nav class="navbar navbar-expand-lg fixed-top ">  
<center><a href="index.php"> <button type="button" class="btn btn-success">Back To Home</button></a></center>
   
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
    <style> #form{
       
    }
body{
    color:white;
   
   background-image:url(images/flower.png);
   
    
}
        </style>
</head>
<body>
 
    <style>
       
input[type=text], select {
  width: 90%;
  padding:4px 10px;
  margin: 6px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  height:7vh;
  
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  height: 30px;
}
textarea{
  width:90%;
 
}
form{
 
}


input[type=submit]:hover {
  background-color: #45a049;

}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.form__container{
  background-color:black;
  width:40%;
  color: white;
  
}
button{
  padding:8px;
  margin:6px;
  border-radius:1rem;
  border:none;
}
</style>
<body>
    

        </div>

    <center>
       
    <form action=" " method="post">
      <auto complete="off"></auto>
      <h2> Feel free to submit the form below to get in touch with us!
        CONTACT US
      </h2>
    <div class="form__container">
   <h3> <label>Your Name:</label><h3>
   <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
      
        
            
       <h3> <label>Your Email:</label><h3>
       <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
        
            
       
        <h3> <label>Your Phoneno:</label><h3>
        <input id="phoneno" class="input" name="phoneno" type="text" value="" size="30" /><br />
      <br>
      
        <label for="message">Message</label><br>
      
    <textarea id="message" name="message" placeholder="Write something.." style="height:100px"></textarea>
       
<br>
<br>
<button type="submit" name='submit' class="btn btn-success">Submit</button> 
</div>  
      
</form>

     



</body>

</html>
<?php
include "connect.php";

if(isset($_POST['submit']) )
{
  
    if( !empty($_POST['name'] ) && !empty($_POST['email'])&& !empty($_POST['phoneno'])&& !empty($_POST['message']))
    {
        echo "hi";
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phoneno=$_POST['phoneno'];
        $message=$_POST['message'];
        $query="INSERT into travels(  name, email, phoneno, message) values( '$name', '$email','$phoneno','$message')";
        
         $query;  
        $run= mysqli_query($conn, $query);

         $query;
        if($run)
        {
            echo"<h1> FORM SUBMITTED SUCCESSIVELY</h1>";
        }
        else{
            echo "<h1> form not submitted </h1>";
        }
        
    }
    else{
        echo "<h1> all fields required </h1>";
    }
  }
    ?>



