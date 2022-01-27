<?php
require 'db.php';
extract($_POST);
$newid = substr($id,6);
$stmt = $db->prepare("UPDATE `data` SET likes = likes + 1 WHERE `ID` = ? ");
$stmt->execute(array((string)$newid)); 
?>