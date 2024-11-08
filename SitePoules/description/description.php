<!DOCTYPE html>
<html lang="fr">
<?php require_once("../structurePages/head.php"); 
	require "../connexionBDD.php";
?>
<link href="./description.css" rel="stylesheet" />
	<body>
	<?php require_once("../structurePages/header.php"); ?>
		<section>
			<div id="liste-poules">
				<?php $query = "SELECT contenu, description FROM description";
					$result = $conn->query($query);
					while ($row = $result->fetch_assoc()) {
						echo "<div class='item-liste-poules'>
							<img src='../img/descriptionIMG/" 
							. htmlspecialchars($row['contenu']) 
							. "' class='image' alt='"
							. htmlspecialchars($row['contenu'])
							. "'/>"
							. "<span>" . htmlspecialchars($row['description']) 
							. "</span>
							</div>";
					}
				?>
			</div>
		</section>
		<?php include "../structurePages/footerContact.php" ?>
		<script src="../js/menu-burger.js"></script>
	</body>
</html>