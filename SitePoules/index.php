<!DOCTYPE html>
<html lang="fr">
	<?php require_once("./structurePages/head.php"); 
		require_once("connexionBDD.php");
	?>
		<link href="./index.css" rel="stylesheet"/>
	<body>
		<?php require_once("./structurePages/header.php"); ?>
		<section>
			<div class="welcome">
			<?php 
				$query = "SELECT contenu FROM presentation";
				$result = $conn->query($query);
				while ($row = $result->fetch_assoc()) {
					echo "<p>" . $row['contenu'] . "</p>";
				}
			?>
			</div>
			<h2>Découvrez nos Poules !</h2>
			<div id="image-viewer">
				<div id="prev-btn" class="nav-btn">
					<span>&lt;</span> 
				</div>
				<img id="current-image" src="" alt="Carrousel d'images de poule">
				<div id="next-btn" class="nav-btn">
					<span>&gt;</span> 
				</div>
			</div>
			<p id="image-title"></p>
		</section>
		<?php require_once "./structurePages/footerContact.php" ?>
		<script src="index.js"></script>
		<script src="js/menu-burger.js"></script>
	</body>
</html>