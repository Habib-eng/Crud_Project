<?php 
require 'db.php';
if (isset($_POST['email'],$_POST['title'],$_POST['category'],$_POST['text'],$_POST['id'])){
    $db->query("INSERT INTO `data` WHERE `ID` = 0 ");
}
var_dump($_POST);
$query1 = $db->query("SELECT FROM `data` WHERE `ID` = ".$_POST['id']); 
$list = fetch($query1);
var_dump($list);
//tester si l'utilisateur peut modifier ou non l'article
if ($email == $list['email']){
    $file fopen($list['text_path'],'a');
    fwrite($file,$text);
    fclose($file);
    $x = "title = ".$title;
    $y = " category = ".$category;  
    $db->query("UPDATE `data` SET ".$x.$y." WHERE `ID` = ".$id);
}
else {
    echo "désole vous n'avez pas le droit de mettre à jour ce formulaire";
}
print_r($_POST);
?>