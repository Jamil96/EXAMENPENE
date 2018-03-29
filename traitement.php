<!DOCTYPE html>
<html>
<head>
<title>connection</title>
<meta http-equiv="Content-Type" content="text/html;
charset=iso-8859-1" />
</head>
<body>
<?php
try{
	$bdd = new PDO("mysql:host=localhost;dbname=site", "root", "sceptre");


}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

         $prenom = "";
		 $nom = "";
		 $adress ="";
		
		 function securisation($donnees){
		 $donnees=trim($donnees);
		 $donnees=stripcslashes($donnees);
		 $donnees=strip_tags($donnees);
		 return $donnees;
		 }
		 $prenom=securisation($_POST['prenom']);
		 $nom=securisation($_POST['nom']);
		 $adresse=securisation($_POST['adresse']);
		


	     $prenom = $_POST['prenom'];
		 $nom = $_POST['nom'];
		 $adresse = $_POST['adresse'];
			$sql = "INSERT INTO personne(PRENOM,NOM,VILLE,ADRESSE,CODE)VALUES('$prenom','$nom','$adresse')" ;
			$bdd->exec($sql);
			//mysql_query ($sql) or die (mysql_error());





		 try{
                include('affiche.php');
		 }
		 catch(Exception $e)
         {
         die('Erreur : '.$e->getMessage());
         }
		?>

</body>
</html>