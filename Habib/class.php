<?php
require 'personnage.php';
$forme = new form();
echo $forme->input('nom');
echo $forme->input('prenom');
echo $forme->input('age');
echo $forme->input('classe');
echo $forme->submit();
?>
