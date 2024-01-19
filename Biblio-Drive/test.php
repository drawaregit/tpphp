<?php 
// Assuming the session variable "panier" contains an array of nolivre values
session_start();

// Add a "1" to the "panier" array session variable
array_push($_SESSION['panier'], 1);

// Print the updated array
print_r($_SESSION['panier']);
?>