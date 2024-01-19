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

<?php
require_once('conf/connexion.php');


if(!isset($_POST['btnEnvoyer'])) 
{
 echo '
  <form class="form-inline" action="" method="POST">
    <input class="form-control mr-sm-2 w-100" type="text" name="txtnomauteur" placeholder="Recherche un auteur par son nom..">
    <button class="btn btn-success" name="btnEnvoyer" value="Envoyer" type="submit">Chercher!</button>
  </form>';
}
else 
{    try {
 $nomauteur = $_POST["txtnomauteur"];
 $requete = "SELECT l.titre, nolivre FROM livre l INNER JOIN auteur a ON (l.noauteur = a.noauteur) WHERE nom like :nomauteur;";
 $stmt = $connexion->prepare($requete);
 $stmt->bindParam(':nomauteur', $nomauteur);
 $stmt->execute();
 $resultat = $stmt->fetchall();

 echo "<ul>";
 foreach ($resultat as $row) {
    echo '<li><a href="infolivre.php?nolivre='.$row['nolivre'].'">'.$row['titre'].'</a></li>';
 }
 
 echo "</ul>";
} catch (Exception $e) {
 echo "Une erreur est survenue lors de la recherche.";
}
}
?>
</body>