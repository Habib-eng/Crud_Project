<?php 
require 'db.php';
$db->query("DELETE FROM `data` WHERE `ID`=".$_POST['id']);
require 'index.php';
?>
