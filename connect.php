<?php
$host="localhost";
$db="CLMS";
$user="root";
$password="123abc";

$arr="mysql:host=$host;dbname=$db";
try{
    $pdo=new PDO($arr,$user,$password);
}catch(PDOException $ex){
    throw new PDOException($ex->getMessage(),(int)$ex->getCode());
}


?>