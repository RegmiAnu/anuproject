<?php
 include "connect.php";
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE destinations set id='" . $_POST['id'] . "',image='" . $_POST['image'] . "', listtitle='" . $_POST['listtitle'] . "', city='" . $_POST['city'] . "', location='" . $_POST['location'] . "' , subject='" . $_POST['subject'] . "' WHERE id='" . $_POST['id'] . "'");
echo "<h1> Record Updated Successfully </h1>";
}
$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM destinations WHERE id= '$id'");
$row= mysqli_fetch_array($result);
?>

<form name="name" method="post" action="">

<div style="padding-bottom:5px;">

</div>
<b><b>Id:</b><b> <br>
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
<br>
<b>image:</b> <br>
<input type="text" name="image"  value="<?php echo $row['image']; ?>">
<b>listtitle:</b> <br>
<input type="text" name="listtitle"  value="<?php echo $row['listtitle']; ?>">

<br>
 <b>city:</b> <br>
<input type="text" name="city" class="txtField" value="<?php echo $row['city']; ?>">

<br>
<b>location:</b><br>
<input type="text" name="location"  class="txtField" value="<?php echo $row['location']; ?>">
<br>

<b>subject:</b><br>
<input type="text" name="subject"  class="txtField" value="<?php echo $row['subject']; ?>">
<br>

<br><b><input type="submit" name="submit" value="UPDATE" class="buttom"></b>

</form>    
</center>
<?php
if(isset($_POST['submit'])){
header("Location: update.php");
exit;
}