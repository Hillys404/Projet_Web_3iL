<?php
	require "../connexionBDD.php";
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["username"] != "" && $_POST["pwd"] != "") {
		$stmt = $conn->prepare("SELECT id FROM utilisateur WHERE username = ? AND password = ?");
		$stmt->bind_param("ss", $_POST['username'], $_POST['pwd']);
		$stmt->execute();
		$stmt->store_result();

		if ($stmt->num_rows > 0) { 
			session_start();
			$stmt->bind_result($userId);
			$stmt->fetch();
			$_SESSION['userId'] = $userId;
		} else { // Mauvais credentials, on repart sur la page du formulaire
			header('Location: ./administration.php');
			exit;
		}
		$stmt->close();
	} 
?>

<!DOCTYPE html>
<html lang="fr">
<?php
	require_once("../structurePages/head.php"); 
?>
<link href="./dashboardAdministrateur.css" rel="stylesheet"/>
<body>
<?php require_once("../structurePages/headerAdmin.php"); ?>
	<section>
		<table id="tableauDescriptions">
            <thead>
                <tr>
                    <th>Image</th>
					<th>Nom de l'image</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- AJAX se charge de créer tous les éléments dynamiquement -->
            </tbody>
        </table>
		<form id="descriptionForm" enctype="multipart/form-data">
			<label for="image">Choisir une image</label>
			<input type="file" id="image" name="image" accept=".jpg,.jpeg,.png" required>
			
			<label for="description">Description:</label>
			<textarea rows="4"  id="description" required></textarea>
			
			<button type="submit">Envoyer</button>
    	</form>
	</section>
	<?php include "../structurePages/footerContact.php" ?>
	<script src="../js/menu-burger.js"></script>
	<script src="./manageDashboard/displayDashboardDescription.js"></script>
</body>

</html>