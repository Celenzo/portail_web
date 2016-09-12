<!DOCTYPE html>

<html>

<head>
	<meta charset='UTF-8'/>
	<title>Accueil</title>
	<link rel="stylesheet" href="<?php echo site_url('css/style.css');?>">
</head>
<body>
	<ul id="nav_list">
		<li><a href="<?php echo site_url('index.php/home/user_list')?>">Liste des utilisateurs</a></li>
		<li><a href="<?php echo site_url('index.php/home/register')?>">Créer un compte</a></li>
	</ul>
	<h2 class="w_message">Bienvenue !</h2>
</body>
</html>