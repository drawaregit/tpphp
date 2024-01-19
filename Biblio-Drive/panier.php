<?php 
session_start();
require_once('conf/connexion.php');
echo'<h1>PANIER</h1>';
if (!isset($_SESSION['profil']) || $_SESSION['profil'] != 'membre') {
    header('Location: acceuilcopy.php');
    exit();
}
else 
{  if (empty($_SESSION['panier'])) {
    echo 'Aucun livre est dans le panier...';
    exit();
}
else
{
    echo "<ul>";
 foreach ($_SESSION['panier'] as $row) {
    echo '<li><a href="infolivre.php?nolivre='.$row.'">livre ici</a></li>';
 }
}
}
?>
</body>