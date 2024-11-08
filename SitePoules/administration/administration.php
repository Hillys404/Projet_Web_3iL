<!DOCTYPE html>
<html lang="fr">
<?php require_once("../structurePages/head.php");
require "../connexionBDD.php";
?>

<body>
	<?php require_once("../structurePages/header.php"); ?>
	<link href="../css/form.css" rel="stylesheet" />
	<section>
		<h2>Connexion</h2>
		<form action="dashboardAdministrateur.php" method="post" id="connexion-form" class="form" autocomplete="off">

			<label for="username">Nom d'utilisateur : </label>
			<input type="text" name="username" id="username" required />

			<label for="pwd">Mot de passe : </label>
			<input type="password" name="pwd" id="pwd" required />

			<input type="submit" value="Se connecter" id="login-btn" />

		</form>
	</section>
	<?php include "../structurePages/footerContact.php" ?>
	<script src="../js/menu-burger.js"></script>
</body>

</html>