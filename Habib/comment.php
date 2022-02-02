<?php 
require 'db.php';
if (!empty($_POST)){
    $query = "INSERT INTO `comments` (`comment`,`ID_Article`,`date`,`own`) values (?,?,?,?) ";
    $stmt = $db->prepare($query);
    $data = array($_POST['comment'],(int)$_POST['ID_Article'],date('d-m-y'),"per_default");
    $stmt->execute($data);
}
else {
    $query = " SELECT  data.ID ,`comment`,`own`,comments.date `date` FROM `data` INNER JOIN `comments` ON data.ID = comments.ID_Article";
    $res = $db->prepare($query);
    $res->execute();
    $rows = $res->fetchALL(PDO::FETCH_OBJ);
    echo json_encode($rows);    
}
?>