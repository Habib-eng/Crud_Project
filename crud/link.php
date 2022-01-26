<?php
session_start();
$mysqli = new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
$Name ='';
$LastName  ='';
$Email = '';
$Article = '';
$Comments = '';
if (isset($_POST['save'])){
    $Name = $_POST['Name'];
    $LastName  =$_POST['LastName'];
    $Email = $_POST['Email'];
    $Article = $_POST['Article'];
    $Comments = $_POST['Comments'];
    
    $mysqli->query("INSERT INTO articles (Name,LastName,Email,Article,Comments) VALUES('$Name','$LastName','$Email','$Article','$Comments')") or
    die($mysqli->error);
    $_SESSION['message']="Record has been saved!";
    $_SESSION['msg_type']="succes";
    header("location: crud.php");
}

if (isset($_GET['delete'])){
    $id=$_GET['delete'];

    $mysqli->query("DELETE FROM articles WHERE id=$id") or die($mysqli->error());
    $_SESSION['message']="Record has been deleted!";
    $_SESSION['msg_type']="danger";
    header("location: Read.php");
}
if (isset($_get['edit'])){
    $id=$_GET['id'];
    $result=$mysqli->query("SELECT * FROM articles WHERE id=$id") or die($mysqli->error());
    if(count($result)==1){
      $row=$result->fetch-array();
      $Name=$row['Name'];
      $LastName=$row['LastName'];
      $Email=$row['Email'];
      $Article=$row['Article'];
      $Comments=$row['Comments'];
    }
}