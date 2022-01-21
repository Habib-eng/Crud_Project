<?php
require "personnage.php";
$mario = new personnage('habib');
$habib = new personnage('mario');
$habib->appeler();
$mario->vie=0;
var_dump($mario->mort());
?>
