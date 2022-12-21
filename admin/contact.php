
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
    <style> #form{
       
    }
body{
    color:black;
   
   background-image:url(images/background.png);
   
    
}
        </style>
</head>
<body>
 
    
        </div>

    <center>
      <h1> Be Connected With Us</h1>
     
       <h1><center>Contact Us</center></h1>
       
    <form action="index.php" method="post">
      <auto complete="off"></auto>
      <h2> Feel free to submit the form below to get in touch with us!</h2>
    
   <h3> <label>Your Name:</label><h3>
        <input type="text" name="name"><br>
      
        
            
       <h3> <label>Your Email:</label><h3>
        <input type="text" name="email"><br>
        
            
       
        <h3> <label>Your Phoneno:</label><h3>
        <input type="text" name="phoneno" minlength="20"><br>
      <br>
        <label for="message">Message</label><br>
        <textarea id="message" name="message" placeholder="Write something.." style="height:200px" ></textarea>
       

       <h3> <button type="submit" name="submit">Submit</button></h3><br>
      
      
</form>

     
    </form>


</body>
</html>

<?php
include_once('topbar.php');
include_once('head.php');
?> 
<?php
include "connect.php";
if(isset($_POST['submit']) )
{

    
    if( !empty($_POST['name'])&& !empty($_POST['email'])&& !empty($_POST['phoneno'])&& !empty($_POST['message']))
    {
        
        $name=$_POST['name'];
        $address=$_POST['email'];
        $phoneno=$_POST['phoneno'];
        $message=$_POST['message'];
        $query="INSERT into travels(  name, email, phoneno, message) values( '$name', '$email','$phoneno','$message')";
        $run= mysqli_query($conn, $query);

        }
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

    ?>


<?php
include_once('footer.php');

?> 
