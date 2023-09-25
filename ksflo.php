<!DOCTYPE html>
<html>
<style>
#corps{
	background-image: url(Ambiance-café-avec-filigrane-scaled3.jpg);
}
</style>
</html>
</head>
<body id="corps">
	<div id="bloc4">
	<center><h2>Formulaire d'inscription</h2></center>
	<form method="POST">
		<center><label>Nom :</label>
		<input type="texte" name="Nom" placeholder="saississez votre Nom"><br><br>
		<label>Prenom :</label> 
		<input type="texte" name="Prenom" placeholder="saississez votre Prenom"><br><br>
		<label>Adresse:</label>
		<input type="texte" name="Adresse" placeholder="saississez votre Adresse"><br><br>
		<label>Telephone:</label>
		<input type="Numero" name="Telephone" placeholder="saississez votre Numero de telephone" ><br><br>
		<label>Email</label>
		<input type="texte" name="Email" placeholder="saississez votre Mail"><br><br>
		<input type="submit" name="Envoyez" value="Envoyez"><br><br>
	</form></center>
	<?php 
	try {
		$db=new PDO('mysql:localhost=host; dbname=formulaire','root','');

		
	} catch (Exception $e) {
		die('Base de donnée introuvable'.$e->getmessage());
	}
	if (isset($_POST['Envoyez'])) {
		$Nom=$_POST['Nom'];
		$Prenom=$_POST['Prenom'];
		$Adresse=$_POST['Adresse'];
		$Telephone=$_POST['Telephone'];
		$Email=$_POST['Email'];

		$P=$db->prepare('SELECT Email FROM user WHERE Email=:Email');
		$P->execute([
			'Email'=>$Email
		]);
		$resultat=$P->rowcount();

	if ($resultat == 0) {
		$P=$db->prepare('INSERT INTO user(Nom,Prenom,Adresse,Telephone,Email) VALUES(:Nom,:Prenom,:Adresse,:Telephone,:Email)');

$P->execute([
'Nom'=>$Nom,
'Prenom'=>$Prenom,
'Adresse'=>$Adresse,
'Telephone'=>$Telephone,
'Email'=>$Email


]);
echo "Enregistrement effectué avec succes";
	} else{
		echo "compte deja existant";
	}



	}
	 ?>


</body>
<footer id="pieds">
	<center>h3>Ce site a été conçu par Monsieur MABIALA Eriga MacK Dorcel By EXPERTISE-TIC-2023</h3></center>
</footer>
</html>