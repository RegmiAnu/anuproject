
<?php
include"nav.php";
?>
<?php
include "connect.php";
?>

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
   
   background-image:url(images/ogange.png);
   
    
}
        </style>
</head>

<section class="booking">

 
   

   <form action=" " method="post" class="book-form">
<div class="container">
      <div class="flex">
     <center> <h1 class="heading-title">Book your trip!</h1></center>
         <div class="inputBox">
            <h4><span>Name :</span></h4>
            <input type="text"  name="name" class="form-control" id="exampleInputname" aria-describedby="nameHelp" >
           
         </div>
         <div class="inputBox">
            <h4><span>Email :</span></h4>
            <input type="text"  name="email" class="form-control" id="exampleInputemail" aria-describedby="emailHelp">
         </div>
         <div class="inputBox">
           <h4> <span>Phone No :</span></h4>
            <input type="text" name="phone"class="form-control" id="exampleInputphoneno" aria-describedby="phoneHelp">
         </div>
         <div class="inputBox">
           <h4> <span>Address :</span></h4>
            <input type="text" name="address"  class="form-control" id="exampleInputaddress" aria-describedby="addressHelp">
         </div>
         <div class="inputBox">
          <h4>  <span>Where to :</span></h4>
            <input type="text" name="location" class="form-control" id="exampleInputlocation" aria-describedby="locationHelp">
         </div>
         <div class="inputBox">
           <h4> <span>How many :</span></h4>
            <input type="text" name="guests" class="form-control" id="exampleInputnoofguests" aria-describedby="guestsHelp">
         </div>
        <center> <div class="inputBox">
            <h4><span>Arrivals :</span></h4>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <h4><span>Leaving :</span></h4>
            <input type="date" name="leaving">
         </div>
</center>
      </div>
<br>
      <center><input type="submit" value="submit" class="brn btn-primary " name="send">
      </div>
      </center>
   </form>
<br>
<br>

  


   <?php
   

if(isset($_POST['send']) )
{
   
   if( !empty($_POST['name'])&& !empty($_POST['email'])&& !empty($_POST['phone'])&& !empty($_POST['address'])&& !empty($_POST['location'])&& !empty($_POST['guests'])&& !empty($_POST['arrivals'])&& !empty($_POST['leaving']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phoneno=$_POST['phone'];
        $address=$_POST['address'];
        $where=$_POST['location'];
        $howmany=$_POST['guests'];
        $arrival=$_POST['arrivals'];
        $leaving=$_POST['leaving'];
         echo "<br>";
       $sql= "INSERT INTO bookings (name, email, phone, address, location, guests, arrivals, leaving) 
       VALUES ('$name', '$email', '$phoneno', '$address', '$where', '$howmany', '$arrival', '$leaving')";
        $run= mysqli_query ($conn, $sql);

         $sql;
        if($run) 
        {
            echo "<h1> FORM SUBMITTED SUCCESSIVELY </h1>";
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
 
</section>

</center>














