

<?php
require_once('conf/connexion.php');

if(!isset($_POST['btnEnvoyer'])) 
{/* L'entrée btnEnvoyer est vide = le formulaire n'a pas été posté, on affiche le formulaire */
  echo '
  <form action="" method="POST">
  <p>Nom de lauteur: <input type="text" name="txtnomauteur" /></p>
  <p><input type="submit" name="btnEnvoyer" value="Envoyer"  /></p>
</form>'; // Ajoutez un point-virgule ici
}
else 
/* L'utilisateur a cliqué sur Envoyer, l'entrée btnEnvoyer <> vide, on traite le formulaire */
{    try {
  $nomauteur = $_POST["txtnomauteur"];
  $requete = "SELECT l.titre FROM livre l INNER JOIN auteur a ON (l.noauteur = a.noauteur) WHERE nom like ':nomauteur';";
  $stmt = $connexion->prepare($requete);
  $stmt->bindParam(':nomauteur', $nomauteur);
  $stmt->execute();
  echo $stmt->rowCount(), " ligne(s) a(ont) été insérée(s).";
} catch (Exception $e) {
  echo "Une erreur est survenue lors de l'insertion.";
}
}
?>

