<?php 

$db_host="localhost";
$db_name="formationphp";
$db_username="root";
$db_password="";

$db =new PDO('mysql:host='.$db_host.';dbname='.$db_name,$db_username,$db_password);
$query = "INSERT INTO users('name','email','age','phone','message') VALUES(?,?,?,?,?)";
//$query = "INSERT INTO `users` (`name`,`email`,`age`,`phone`,`message`) VALUES(?,?,?,?,?)"; cote li t7toha l requete préparée heya hethi ` mech hethi ' fama far8 fais attention au syntaxe!
if (isset($_POST["save"])){
    $stmt = $db->prepare($query);
    $data = [$_POST["name"],$_POST["email"],$_POST["age"],$_POST["phone"],$_POST["message"]];
    // $data = array($_POST["name"],$_POST["email"],$_POST["age"],$_POST["phone"],$_POST["message"]); : declaration ta3 liste te3ek ghalta si farouk , liste declariha hakeya : array(element1,element2,element3,..)
    $stmt->execute($data);
}
var_dump($_POST);
//si nn jawek behi tajem tkamael 5edmtek ma3atech barcha mezelek delete update w l'affichage;
?>