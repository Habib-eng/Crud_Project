<?php 
require 'db.php';
extract($_POST);
$query = "UPDATE `data` SET title = ? WHERE ID = ?";
$stmt = $db->prepare($query);
$stmt->execute([$_POST['title'],$_POST['id']]);
?>