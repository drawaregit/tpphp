<?php
require_once('conf/connexion.php');

if (isset($_GET["nolivre"]) && !empty(trim($_GET["nolivre"]))) {
    try {
        $nolivre = $_GET["nolivre"];
        $requete = "SELECT titre, a.nom , isbn13, anneeparution, resume, dateajout FROM `livre` l INNER JOIN auteur a ON (a.noauteur = l.noauteur) WHERE nolivre = :nolivre;";
        $stmt = $connexion->prepare($requete);
        $stmt->bindParam(':nolivre', $nolivre);
        $stmt->execute();
        $resultat = $stmt->fetch();

        if ($resultat) {
            echo "<ul>";
            echo "<li>" . $resultat['titre'] . "</li>";
            echo "<li>" . $resultat['nom'] . "</li>";
            echo "<li>" . $resultat['isbn13'] . "</li>";
            echo "<li>" . $resultat['anneeparution'] . "</li>";
            echo "<li>" . $resultat['resume'] . "</li>";
            echo "<li>" . $resultat['dateajout'] . "</li>";
            
            echo "</ul>";
        } else {
            echo "Aucun résultat trouvé pour le numéro de livre spécifié.";
        }
    } catch (Exception $e) {
        echo "Une erreur est survenue lors de la recherche.";
    }
} else {
    echo "Veuillez spécifier un numéro de livre.";
}

?>