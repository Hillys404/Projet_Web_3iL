<?php
require "../../connexionBDD.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $stmt = $conn->prepare("DELETE FROM description WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}