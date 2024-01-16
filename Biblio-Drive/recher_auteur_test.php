<?php
require_once('conf/connexion.php');

if(!isset($_POST['btnEnvoyer'])) 
{
 echo '
 <form action="" method="POST">
 <p><input type="text" name="txtnomauteur" placeholder="Rechercher un auteur par son nom.." /></p>
 <p><input type="submit" name="btnEnvoyer" value="Envoyer" /></p>
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