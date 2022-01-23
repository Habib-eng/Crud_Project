<?php
function is_empty($list){
    $result = false;
    foreach ($list as $value){
        if (empty($value)){
            $result = true;
            break;
        }
    }
    return $result;
}
require 'db.php' ;
$query = "INSERT INTO `authors` (`firstName`,`lastName`,`email`,`password`,`level`) VALUES (?,?,?,?,?) ";
$stmt = $db->prepare($query);
if (isset($_POST["save"])){
    $data = [$_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['password'],(int)$_POST['level']];
    $stmt->execute($data);
}
//require 'blog.php'; 
?>