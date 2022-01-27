<?php 
$mysqli = new mysqli('localhost', 'root','','achref') or die(mysqli_error($mysqli));
if (isset($_POST['Save'])){
$Nom=$_POST['Nom'];
$Prénom=$_POST['Prenom'];
$Email=$_POST['Email'];
$Article=$_POST['Articles'];
$Détails=$_POST['Details'];
if (!empty(array($Nom,$Prénom,$Email,$Article,$Détails))) { 
$stmt = $mysqli->prepare("INSERT INTO `supref` (`Nom`, `Prénom`, `Email`, `Article`, `Détails`) VALUES (?,?,?,?,?)") or die($mysqli->error);
$stmt -> bind_param("sssss",$Nom,$Prénom,$Email,$Article,$Détails);
$stmt->execute();
	require"formulaire.php";
}
}
?>
