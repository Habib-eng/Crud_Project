<?php

$mysqli = new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
if (isset($_POST['save'])){
    $Name = $_POST['Name'];
    $LastName  =$_POST['LastName'];
    $Email = $_POST['Email'];
    $Article = $_POST['Article'];
    $Comments = $_POST['Comments'];

    $mysqli->query("INSERT INTO articles (Name,LastName,Email,Article,Comments) VALUES('$Name','$LastName','$Email','$Article','$Comments')") or
    die($mysqli->error);
}