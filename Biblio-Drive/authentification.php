<!DOCTYPE html>
<html>
<head>
</head>

<?php

require_once('conf/connexion.php');

if (!isset($_SESSION["mail"])) 
{
    if(!isset($_POST['btnConnecter'])) 
    {
        echo '
         <h1>CONNEXION</h1>
         <form action="acceuilcopy.php" method="POST">
         <p>Mail: <input type="text" name="txtmel" /></p>
         <p>Mot de passe: <input type="text" name="txtmdp" /></p>
         <p><input type="submit" name="btnConnecter" value="Envoyer" /></p>
        </form>'; // Ajoutez un point-virgule ici
    }
    else 
    {
        try {
            $mail = $_POST["txtmel"];
            $mdp = $_POST["txtmdp"];
            $requete = "SELECT mel, motdepasse, profil FROM utilisateur WHERE mel = :mail AND motdepasse = :mdp";
            $stmt = $connexion->prepare($requete);
            $stmt->bindParam(':mail', $mail);
            $stmt->bindParam(':mdp', $mdp);
            $stmt->execute();
            $resultat = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($resultat) {
                $_SESSION["mail"] = $resultat['mel'];
                $_SESSION["profil"] = $resultat['profil'];
                $_SESSION["panier"] = array();
                header("Location: acceuilcopy.php");
                exit(); 
            } else {
                echo "Email ou Mot de Passe invalide!";
            }

        }
        catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
} else {
    echo '
     <h1>WELCOME ' . $_SESSION["mail"] . '</h1>
     <h1>Vous êtes ' . $_SESSION["profil"] . '!</h1>
     <form action="deconnexion.php" method="POST">
     <p><input type="submit" name="btnDeconnecter" value="Deconnexion" /></p>
    </form>';
}
?>
</body>
</html>