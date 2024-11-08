<?php
require "../../connexionBDD.php";

$stmt = $conn->prepare("SELECT id, contenu, description FROM description");
$stmt->execute();
$result = $stmt->get_result();
$descriptions = [];

while ($row = $result->fetch_assoc()) {
    $descriptions[] = $row;
}

echo json_encode($descriptions);
