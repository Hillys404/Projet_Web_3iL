<?php

require "../../connexionBDD.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("UPDATE description SET description = ? WHERE id = ?");
    $stmt->bind_param("si", $description, $id);
    $stmt->execute();
}