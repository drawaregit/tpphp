<!DOCTYPE html>
<html>
<head>
<title>Résultat Recherche</title>
<link rel="icon" type="image/png" href="icone.png" />
</head>
<body>

<!DOCTYPE html>
<html>
<head>
<title>Résultat Recherche</title>
<link rel="icon" type="image/png" href="icone.png" />
</head>
<body>
<?php
require_once('conf/connexion.php');

try {
  $noplante = $_POST["txtnoplante"];
  $nomplante = $_POST["txtnomplante"];
  $noregion = $_POST["txtnoregion"];
  $requete = "INSERT INTO plante(noplante, nomplante, noregion) VALUES('".$noplante."','".$nomplante."','".$noregion."')";
  echo $requete;
  $nombreDeInsertion = $connexion->exec($requete);
  echo $nombreDeInsertion, " ligne(s) a(ont) été insérée(s).";
} catch (Exception $e) {
  echo "Une erreur est survenue lors de l'insertion.";
}
?>