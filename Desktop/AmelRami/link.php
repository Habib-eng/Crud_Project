<?php 
$db_host = "localhost";
$db_name = "crud";
$db_username = "root";
$db_password = "";



$db = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_username, $db_password);

$query = "INSERT INTO `articles`(`First_Name`, `Last_Name`, `Email`, `Article`, `Comments`) VALUES (?,?,?,?,?,?)";

$stmt = $db->prepare($query);

if(isset($_POST["First_Name"])){
    $data = [$_POST["First_Name"] , $_POST["Last_Name"] ,$_POST["Email"] , $_POST["Article"] , $_POST["Comments"]];
    $stmt->execute($data);

}