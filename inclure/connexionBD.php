<?php
	//Définition des variables de connexion à la base de données
	$bd_serveur='localhost';
	$bd_login='root';
	$bd_passwd='sceptre';
	$bd_name='senroyal';
	//Connexion à la base de données
	
$bdd = new PDO('mysql:host=localhost;dbname=senroyal', 'root', 'sceptre');
	//mysql_select_db($bd_name);
	//mysql_query('SET NAMES UTF8');
?>
