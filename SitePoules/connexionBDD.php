<?php
$host = 'mysql-caussej.alwaysdata.net'; // localhost
$dbname = 'caussej_site_poules';
$username = 'caussej'; // Par défaut sur XAMPP
$password = '6b@fCd!hQSTHzBQ'; // Pas de mot de passe sur XAMPP par défaut

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connexion à la base de données impossible : ' . $conn->connect_error);
}
