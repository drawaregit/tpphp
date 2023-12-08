
<!DOCTYPE html>
<html>
<head>
<title>Résultat Recherche</title>
<link rel="icon" type="image/png" href="icone.png" />
</head>
<body>



<?php
require_once('conf/connexion.php');

if(!isset($_POST['btnEnvoyer'])) 
{/* L'entrée btnEnvoyer est vide = le formulaire n'a pas été posté, on affiche le formulaire */
  echo '
  <form action="" method="POST">
  <p>Numero Auteur: <input type="text" name="txtnoauteur" /></p>
  <p>Titre: <input type="text" name="txttitre" /></p>
  <p>ISBN13: <input type="text" name="txtisbn" /></p>
  <p>Annee parution: <input type="text" name="txtannédeparution" /></p>
  <p>Resume: <textarea name="txtresume" rows="5" cols="40"></textarea></p>
  <p>Image: <input type="text" name="txtimage" /></p>
  <p>Date d ajout: <input type="text" name="txtdatedajout" /></p>
  <p><input type="submit" name="btnEnvoyer" value="Envoyer"  /></p>
</form>'; // Ajoutez un point-virgule ici
}
else 
/* L'utilisateur a cliqué sur Envoyer, l'entrée btnEnvoyer <> vide, on traite le formulaire */
{    try {
  $noauteur = $_POST["txtnoauteur"];
  $titre = $_POST["txttitre"];
  $isbn13 = $_POST["txtisbn"];
  $anneeparution = $_POST["txtannédeparution"];
  $resume = $_POST["txtresume"];
  $image = $_POST["txtimage"];
  $datedajout = $_POST["txtdatedajout"];
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
} catch (Exception $e) {
  echo "Une erreur est survenue lors de l'insertion.";
}
}
?>

