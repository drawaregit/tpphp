<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <title>Accueil - Biblio Drive</title>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: auto%;
    height: 100;
}
  </style>
</head>
<body>
   <h1> LES DERNIERS AJOUTS </h1>
<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
 <li data-target="#demo" data-slide-to="0" class="active"></li>
 <li data-target="#demo" data-slide-to="1"></li>
 <li data-target="#demo" data-slide-to="2"></li>
</ul>

<?php 
require_once('conf/connexion.php');
$stmt = $connexion->prepare("SELECT image from livre ORDER BY dateajout DESC LIMIT 3");
?>

<!-- The slideshow -->
<div class="carousel-inner">
 <div class="carousel-item active">
    <img src="couvertures/1.jpg" alt="Los Angeles">
 </div>
 <?php
 $i = 2;
 while ($i < 4) {
    echo '<div class="carousel-item">
      <img src="couvertures/'.$i.'.jpg" alt="Los Angeles">
    </div>';
    $i++;
 }
 ?>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
 <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
 <span class="carousel-control-next-icon"></span>
</a>

</div>
</body>
</html>