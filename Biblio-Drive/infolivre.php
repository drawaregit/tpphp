<?php
session_start();
require_once('conf/connexion.php');

if (isset($_GET["nolivre"]) && !empty(trim($_GET["nolivre"]))) {
    try {
        $nolivre = $_GET["nolivre"];
        $requete = "SELECT titre, a.nom , isbn13, anneeparution, resume, dateajout, image, nolivre FROM `livre` l INNER JOIN auteur a ON (a.noauteur = l.noauteur) WHERE nolivre = :nolivre;";
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
            echo '<img src="couvertures/' . $resultat['image'] . '" max-width="1100" max-height="500">';


            if (!isset($_SESSION['profil']) || $_SESSION['profil'] != 'membre') {
                echo 'connectez vous pour rajouter des livres dans votre panier.';
                exit();
            } 
            
            else 

            {  
                $panier = $_SESSION['panier'];
                if (in_array($nolivre, $panier, TRUE))
                {
                    echo 'livre dans le panier!';
                }

               else

               { 
                echo '<form method="POST">
                <p><input type="submit" name="btnajoutpanier" value="Ajouter au panier" /></p>
               </form>';
               if (isset($_POST['btnajoutpanier'])) {
                array_push($_SESSION['panier'], $nolivre);
                echo "<meta http-equiv='refresh' content='0'>";
            }
               }
            }
        } 
        else 
        {
            echo "Aucun résultat trouvé pour le numéro de livre spécifié.";
        }
    } catch (Exception $e) {
        echo "Une erreur est survenue lors de la recherche.";
    }
} 
else 
{
    echo "Veuillez spécifier un numéro de livre.";
}

?>