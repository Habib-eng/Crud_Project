<?php
require 'db.php';
extract($_POST);
$stmt = $db->prepare("UPDATE `data` SET likes = likes + 1 WHERE `ID` = ? ");
$stmt->execute(array((string)$id)); 
?>