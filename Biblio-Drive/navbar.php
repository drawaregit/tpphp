<html>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-white navbar-dark">
<?php include 'blablainfofermeture.php';?> <br>
<?php include 'recher_auteur_test.php';?>
<?php 

if (isset($_SESSION['profil']) && $_SESSION['profil'] == 'admin') {
   echo '<a href="c_ajout_membre.php" class="button">Ajout Membre</a>
   <a href="c_ajout_livre.php" class="button">Ajout Livre</a>';
} ?>
 
 <?php if (isset($_SESSION['profil']) && $_SESSION['profil'] == 'membre') {
   echo '<a href="panier.php" class="button">Panier</a>';
} ?>
   <a class="navbar-brand" href="#">
    <img src="logobibliotheque.jpg" alt="Logo" style="width:100px;">
  </a>
</nav>


</body>
</html>