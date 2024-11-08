<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];

        $uploadDir = '../../img/descriptionIMG/';
        $allowedTypes = ['image/jpeg', 'image/png'];

        $imageType = mime_content_type($image['tmp_name']);
        if (in_array($imageType, $allowedTypes)) {
            // On évite un doublon sur le nom des images grâce à uniqid()
            $imageName = uniqid() . '-' . basename($image['name']);
            $uploadFile = $uploadDir . $imageName;
            
            if (move_uploaded_file($image['tmp_name'], $uploadFile)) {
                echo json_encode(['status' => 'success', 'imageName' => $imageName]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Échec du téléchargement de l\'image.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Type de fichier non autorisé.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Aucun fichier envoyé.']);
    }
}