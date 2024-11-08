<?php
echo "<footer id='footer'>";
$query = "SELECT nom, email, telephone, adresse FROM contact";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
    echo "<div id='contact-footer'>"
        . "<p id='nom'>" . htmlspecialchars($row['nom']) . "</p>"
        . "<p>Email : " . htmlspecialchars($row['email']) . "</p>"
        . "<p>Téléphone : " . htmlspecialchars($row['telephone']) . "</p>"
        . "<p>Adresse : " . htmlspecialchars($row['adresse']) . "</p>"
        . "</div>";
}

echo "3iL - 2024 - Tous droits réservés." ;

if (isset($_SESSION['userId'])) {
    echo "<a href='../administration/deconnexion.php'>Deconnexion</a>";
} else {
    echo "<a href='../administration/administration.php'>Connexion</a>";
}

echo "</footer>";
