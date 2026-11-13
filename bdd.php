<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = ""; // Mets ton mot de passe si tu en as un, ou laisse vide
$base = "Inventaire_sono";

$conn = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}
?>
