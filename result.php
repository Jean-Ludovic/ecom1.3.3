<?php
require_once("function.php");
var_dump($_POST);
if($_POST){
    $name=$_POST['nom'];
    if(empty($name)){
        echo "<br>Nom vide";
    }else{ 
        echo"<br>Mon nom est : ".$name;
    }
}
echo"<br>";
$saltedName=addSalt($_POST['nom']);
var_dump($saltedName);
echo "<br>";
$encodeName=encodeName($saltedName);
var_dump($encodeName);
?>