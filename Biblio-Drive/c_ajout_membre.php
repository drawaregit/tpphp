
<!DOCTYPE html>
<html>
<head>
<title>Ajout Membre</title>
<link rel="icon" type="image/png" href="icone.png" />
</head>
<body>



<?php
require_once('conf/connexion.php');

if(!isset($_POST['btnEnvoyer'])) 
{/* L'entrée btnEnvoyer est vide = le formulaire n'a pas été posté, on affiche le formulaire */
  echo '
  <form action="" method="POST">
  <p>Mail: <input type="text" name="txtmel" /></p>
  <p>Mot de passe: <input type="text" name="txtmdp" /></p>
  <p>Nom: <input type="text" name="txtnom" /></p>
  <p>Prénom: <input type="text" name="txtprenom" /></p>
  <p>Adresse: <input type="text" name="txtadresse" /></p>
  <p>Ville: <input type="text" name="txtville" /></p>
  <p>Code postal: <input type="text" name="txtcodepostal" /></p>
  <p><input type="submit" name="btnEnvoyer" value="Envoyer"  /></p>
</form>'; // Ajoutez un point-virgule ici
}
else 
/* L'utilisateur a cliqué sur Envoyer, l'entrée btnEnvoyer <> vide, on traite le formulaire */
{    try {
  $mail = $_POST["txtmel"];
  $mdp = $_POST["txtmdp"];
  $nom = $_POST["txtnom"];
  $prenom = $_POST["txtprenom"];
  $adresse = $_POST["txtadresse"];
  $ville = $_POST["txtville"];
  $codepostale = $_POST["txtcodepostal"];
  $requete = "INSERT INTO utilisateur(mel, motdepasse, nom, prenom, adresse, ville, codepostal) VALUES(:mail, :mdp, :nom, :prenom, :adresse, :ville, :codepostale)";
  $stmt = $connexion->prepare($requete);
  $stmt->bindParam(':mail', $mail);
  $stmt->bindParam(':mdp', $mdp);
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':prenom', $prenom);
  $stmt->bindParam(':adresse', $adresse);
  $stmt->bindParam(':ville', $ville);
  $stmt->bindParam(':codepostale', $codepostale);
  $stmt->execute();
  echo $stmt->rowCount(), " ligne(s) a(ont) été insérée(s).";
} catch (Exception $e) {
  echo "Une erreur est survenue lors de l'insertion.";
}
}
?>

