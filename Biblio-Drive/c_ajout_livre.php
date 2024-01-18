
<!DOCTYPE html>
<html>
<head>
<title>Ajout Livre - Bibio Drive</title>
</head>
<body>



<?php
session_start();
if (!isset($_SESSION['profil']) || $_SESSION['profil'] != 'admin') {
    header('Location: acceuilcopy.php');
    exit();
}
require_once('conf/connexion.php');
$stmt = $connexion->prepare("SELECT nom, noauteur from auteur");
$stmt->execute();
$nomsauteurs = $stmt->fetchAll();
if(!isset($_POST['btnEnvoyer'])) 
{/* L'entrée btnEnvoyer est vide = le formulaire n'a pas été posté, on affiche le formulaire */
  echo '
  <form action="" method="POST">
  <select name="txtnoauteur" size="1">';
  foreach ($nomsauteurs as $row) {
    echo '<option value="'.$row['noauteur'].'"> '.$row['nom'].' </option>'
  ;}
  echo '</select>
 <p>Titre: <input type="text" name="txttitre" /></p>
  <p>ISBN13: <input type="text" name="txtisbn" /></p>
  <p>Annee parution: <input type="text" name="txtannédeparution" /></p>
  <p>Resume: <textarea name="txtresume" rows="5" cols="40"></textarea></p>
  <p>Image: <input type="text" name="txtimage" /></p>
  <p><input type="submit" name="btnEnvoyer" value="Envoyer"  /></p>
</form>'; // Ajoutez un point-virgule ici
}
else 
/* L'utilisateur a cliqué sur Envoyer, l'entrée btnEnvoyer <> vide, on traite le formulaire */
{
  $noauteur = $_POST["txtnoauteur"];
  $titre = $_POST["txttitre"];
  $isbn13 = $_POST["txtisbn"];
  $anneeparution = $_POST["txtannédeparution"];
  $resume = $_POST["txtresume"];
  $image = $_POST["txtimage"];
  $datedajout = date('Y-m-d');
  $requete = "INSERT INTO livre(noauteur, titre, isbn13, anneeparution, resume, image, dateajout) VALUES(:noauteur, :titre, :isbn13, :anneeparution, :resume, :image, :datedajout)";
  $stmt = $connexion->prepare($requete);
  $stmt->bindParam(':noauteur', $noauteur);
  $stmt->bindParam(':titre', $titre);
  $stmt->bindParam(':isbn13', $isbn13);
  $stmt->bindParam(':anneeparution', $anneeparution);
  $stmt->bindParam(':resume', $resume);
  $stmt->bindParam(':image', $image);
  $stmt->bindParam(':datedajout', $datedajout);
  $stmt->execute();
  echo $stmt->rowCount(), " ligne(s) a(ont) été insérée(s).";
}
?>

