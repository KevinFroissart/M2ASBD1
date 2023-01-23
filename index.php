<!DOCTYPE html>
<html>
  <head>
	<title> Un TP avec Vault</title>
  </head>
  <body>
	<?php include_once('app.php');?>
	<center>
		<form method="post">
			<label>Votre texte:<br>
			<input type="text" name="data"/>
			<br>
			<input type="submit" name="encrypt" value="chiffrer"/>
			<input type="submit" name="decrypt" value="dechiffrer"/>
		</form>
		<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		?>
		<div>Votre résultat:<br> <?= $data ?></div>
		<?php
		}
		?>
	</center>
  </body>
</html>
