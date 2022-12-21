<?php
include "db.php";

if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE form destinations id='" . $_POST['id'] . "',image='" . $_POST['image'] . "', listtitle='" . $_POST['listtitle'] . "', city='" . $_POST['city'] . "',location='" . $_POST['location'] . "', subject='" . $_POST['subject'] . "' WHERE id='" . $_POST['id'] . "'");
     echo "Record Modified Successfully";
    }
    $result = mysqli_query($conn,"SELECT * FROM travel WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <title>Update form Data</title>

</head>
<body>
<form name="name" method="post" action="">
<div style="padding-bottom:5px;">
</div>
id: <br>
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
Image: <br>
<input type="text" name="image" class="txtField" value="<?php echo $row['image']; ?>">
<br>
Listtitle :<br>
<input type="text" name="listtitle" class="txtField" value="<?php echo $row['listtitle']; ?>">
<br>
City:<br>
<input type="text" name="city" class="txtField" value="<?php echo $row['city']; ?>">
<br>
Location:<br>
<input type="text" name="location" class="txtField" value="<?php echo $row['location']; ?>">
<br>

message :<br>
<input type="text" name="message" class="txtField" value="<?php echo $row['message']; ?>">
<br>
<input type="submit" name="submit" value="update" class="button">

</form>

<?php
if(isset($_POST['submit']))
{
    header("Location:fetch1.php");
    exit;
}
?>
</body>
</html>