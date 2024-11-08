<!DOCTYPE html>
<html lang="fr">
<?php require_once("../structurePages/head.php");
require "../connexionBDD.php"; ?>

<body>
	<?php require_once("../structurePages/header.php"); ?>
	<section>
		<h2>Vous souhaitez des renseignements complémentaires ? Contactez-nous !</h2>
		<form class="form">
			<label for="nom">Nom :</label>
			<input type="text" id="nomForm" name="nom" required>

			<label for="prenom">Prénom :</label>
			<input type="text" id="prenomForm" name="prenom" required>

			<label for="email">Email :</label>
			<input type="email" id="emailForm" name="email" required>

			<label for="telephone">Téléphone :</label>
			<input type="tel" id="telephoneForm" name="telephone" required>

			<label for="contenu">Contenu :</label>
			<textarea id="contenuForm" name="contenu" rows="5" required></textarea>

			<button type="submitForm">Envoyer</button>
    	</form>

		<h1>Nos coordonnées :</h1>
		<div class="form">
		<?php $query = "SELECT nom, email, telephone, adresse FROM contact";
		$result = $conn->query($query);
		while ($row = $result->fetch_assoc()) {
			echo "<h2>" . htmlspecialchars($row['nom']) . "</h2>"
				. "<p>Email : <a href='mailto:" . htmlspecialchars($row['email']) 
				. "'>" . htmlspecialchars($row['email']) . "</a></p>"
				. "<p>Téléphone : " . htmlspecialchars($row['telephone']) . "</p>"
				. "<p>Adresse : " . htmlspecialchars($row['adresse']) . "</p>";
		}
		?>
		</div>
	</section>
	<?php include "../structurePages/footerContact.php" ?>
	<script src="../js/menu-burger.js"></script>
</body>

</html>