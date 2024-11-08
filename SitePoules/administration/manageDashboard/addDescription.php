<?php

require "../../connexionBDD.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['imageName']) && isset($_POST['description'])) {
        $imageName = $_POST["imageName"];
        $description = $_POST["description"];

        $stmt = $conn->prepare("INSERT INTO description (contenu, description) VALUES (?, ?)");
        $stmt->bind_param("ss", $imageName, $description);
        $stmt->execute();

        $conn->close();
    }
}