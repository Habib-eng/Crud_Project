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
?>