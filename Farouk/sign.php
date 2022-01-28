<h1>hizem miboun </h1>
<?php 

$db_host="localhost";
$db_name="formationphp";
$db_username="root";
$db_password="";

$db=new PDO('mysql:host='.$db_host.';dbname='.$db_name,$db_username,$db_password);
echo("aaaa");
$query="INSERT INTO users('name','email','age','phone','message') VALUES(?,?,?,?,?)";

if (isset($_POST["save"])){
    
    $stmt=$db->prepare($query);
    $data=[$_POST["name"],$_POST["email"],$_POST["age"],$_POST["phone"],$_POST["message"]];
    $stmt->execute($data);
}



?>