<!DOCTYPE html>
<html>
<head>
	<title>Adresse Client</title>
	<Meta charset="utf-8"/>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('inclure/Header.php'); ?>
<section>
	<article>
<h1 > Veuillez  renseigner les informations suivantes</h1>
 <form method="POST"  id="resaForm">
			<h2>Ajouter un contact en remplissant le formulaire</h2>
			 <label for="name">Prenom</label>
			 <input type="text" name="prenom" id="name">
			 <label for="nom">Nom</label>
			 <input type="text" name="nom" id="nom">
			 <label for="adresse">Adresse</label>
			 <input type="text" name="adresse" id="adresse">
						 <input type="submit" name="enregistrer" value="Ajouter contact">

</form>
</article>
<?php include('inclure/aside.php')?>
	<div class="break"></div>
</section>

<?php include('inclure/pied.php')?>
</body>
</html>