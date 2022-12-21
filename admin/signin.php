<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
</head>
<body>
<body>    
    <h2>Signin Page</h2><br>    
    <div class="signin">    
    <form id="signin" method="POST" action=" ">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="uname" id="Uname" placeholder="Username" required>    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="password" id="Pass" placeholder="Password" required>    
        <br><br>    
        <label><b>Confirm Password     
        </b>    
        </label>    
        <input type="Password" name="password" id="Pass" placeholder="Password" required>    
        <br><br>    
         <button type="submit"> Sign in</button>
        <br><br>    
        <p>
        Already registered? <a href="login.php">Sign in</a>
    </p>   
    </form>     
</div>    
</body>    
</body>
</html>

On Fri, 24 Jun 2022 at 14:20, Anu Regmi <regmianu123@gmail.com> wrote:
connect.php
<?php
$server= "localhost";
$username= "root";
$password= "";
$dbname="business";

$conn= mysqli_connect($server, $username, $password, $dbname);

    ?>

On Fri, 24 Jun 2022 at 14:20, Anu Regmi <regmianu123@gmail.com> wrote:
login.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
   
    <h2>Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="POST" action=" ">    
        <label><b> Name     
        </b>    
        </label>    
        <input type="text" name="name" id="name" placeholder="Name" required>    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="password" id="password" placeholder="Password" required>    
        <br><br>    
         <button type="submit" name="login"> Log in</button>   
        <br><br>    
        Forgot <a href="#">Password</a>    
    </form>     
</div>    

<?php
include "connect.php";

    if( isset($_POST['login']) )

{ 
    if(!empty($_POST['name']) && !empty($_POST['password'])  )
    {
        
        $name=$_POST['name'];
        $password=$_POST['password'];
        
        $query="INSERT into admin (name, password) values('$name', '$password')";
        $run = mysqli_query($conn, $query);
        
        if($run)
        {
            header("location:addlist.php");
        }
        else{
            echo "<h5> You are not logged in </h5>";
        }
        
    }
    else{
        echo "<h5> Please Fill Up All The Details </h5>";
    }
}
?>
</br>

</body>    

</html
