<?php 

$dsn = "mysql:host=localhost; dbname=var5";
$user = 'root';
$pass = 'root';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $dbh->exec('SET NAMES utf8');
   
} catch (PDOException $e) {
    echo "Ошибка";
}