<?php
ini_set('display_errors', 1);
try {
  $db = new PDO (
    'mysql:host=localhost;dbname=crud;charset=utf8',
    'root',
    ''
  );
}
  catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$query = "INSERT INTO `data`(`ID`,`firstName`, `lastName`, `email`, `level`, `group`, `exampleFormControlTextarea1`) VALUES (?,?,?,?,?,?,?)";
$stmt = $db->prepare($query);
if(isset($_POST["save"])){
  $data = [$_POST["inscrinum"],$_POST["firstName"] , $_POST["lastName"] , ($_POST["email"]) , $_POST["level"] , $_POST["group"],$_POST["exampleFormControlTextarea1"]];
  $stmt->execute($data);
}
include('crud.php');
$result = $db->query("SELECT * from data");
var_dump($result->fetchALL());
?>


