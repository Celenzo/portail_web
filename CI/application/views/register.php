<html>
	<head>
		<meta charset='UTF-8'/>
		<title>Créer un compte</title>
		<link rel="stylesheet" href="<?php echo site_url('css/style.css');?>">
	</head>
	<body>
		<ul  id="nav_list">
			<li><a href="<?php echo site_url('index.php/home/')?>">Retour sur l'accueil</a></li>
			<li><a href="<?php echo site_url('index.php/home/user_list')?>">Liste des utilisateurs</a></li>
		</ul>
		<div id="add_field">
			<p>Add user</p>
			<!-- On ouvre le form -->
			<?php
				$path = site_url('index.php/home/add_user');
				echo form_open($path);
			?>
			<table>
				<!-- Un tablea prenant tout les input -->
				<tr>
				<td>Nom : </td>
				<td><input type="text" name="nom"></td>
				</tr>
				<tr>
				<td>Prenom : </td>
				<td><input type="text" name="prenom"></td>
				</tr>
				<tr>
				<td>Adresse : </td>
				<td><input type="text" name="adresse"></td>
				</tr>
				<tr>
				<td>E-Mail : </td>
				<td><input type="text" name="mail"></td>
				</tr>
				<tr>
				<!-- Bouton de validation -->
				<td><input type="submit" name="valider" value="Valider"></td>
				</tr>
			</table>
		</div>
	</body>
</html>