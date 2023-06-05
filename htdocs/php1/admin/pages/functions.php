<?php
//DB Connection 
header("Content-Type: text/html; charset=utf-8");
//error_reporting(0)
setlocale(LC_ALL, "tr_TR.UTF-8","tr_TR", "tr", "turkish");

$DBhost = "localhost";
$DBuser = "root";
$DBpassword = "";
$DBname = "library";
try{
    $db = new PDO("mysql:host=$DBhost;dbname=$DBname;",$DBuser,$DBpassword);


}

catch(PDOException $e){
echo $e->getMessage();

}
$db-> exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");

define("_URL","http://localhost/php1/admin/pages/forms.php");


?>