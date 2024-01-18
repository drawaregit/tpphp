<?php 
session_start();
if (!isset($_SESSION['profil']) || $_SESSION['profil'] != 'membre') {
    header('Location: acceuilcopy.php');
    exit();
}
echo'Tu es bien un membre et rien d autre!!'?>