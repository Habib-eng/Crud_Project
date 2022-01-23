<?php 
require 'db.php';
$_POST['id']
$db->query("DELETE FROM `data` WHERE `ID`=".$_POST['id']);
require 'index.php';
?>
