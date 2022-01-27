<?php 
require 'db.php';
extract($_POST);
$stmt = $db->prepare(" DELETE FROM `data` WHERE `ID` = ? ");
$stmt->execute(array($id));
require 'index.php';
?>
