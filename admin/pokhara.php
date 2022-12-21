<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
   
    <?php
    include "inc/topbar.php";
    include "inc/navbar.php";
    
    ?>
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/begnas.png" alt="" height=400, width=400>
      
      
    </div>
    
<div class="container-fluid">
<center><h2>   Around Pokhara    </H2></center>

<div class="card-group">
<div class="card">
 <img  src="images/Sarangkot.jpg" alt="Card image cap" height=300, width=400>
 <div class="card-body">
  
   <input type="button" value="BOOK NOW"class="btn btn-primary" onclick="location='bookingform/placebook.php'" />
   <h3 class="card-title">Sarangkot</h3>
      <p class="card-text">Sarangkot is famous for sunrise view and paragliding</p>
   <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
 </div>
</div>
<div class="card">
 <img  src="images/devisfalls.png" alt="Card image cap" height=300, width=400>
 <div class="card-body">
 <input type="button" value="BOOK NOW"  class="btn btn-primary" onclick="location='bookingform/placebook.php'" />
  <h3 class="card-title">Devis fall</h3>
  <p class="card-text">Devis fall has a beautifull senario of river.</p>
   <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
 </div>
</div>
<div class="card">
 <img src="images/mahendracave.png" alt="Card image cap" height=300, width=400>
 <div class="card-body">
 <input type="button" value="BOOK NOW" class="btn btn-primary" onclick="location='bookingform/placebook.php'" />
  <h5 class="card-title">Mahendra Cave</h5>
 <p class="card-text">Mahendra Cave is located at Batulechour.</p>
   <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
 </div>
</div>

</div>


</body>
<?php
include "inc/footer.php";
?>
