<?php
$dsn = "mysql:host=localhost; dbname=var5";
$user = 'root';
$pass = 'root';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $price = $_GET["range"];


    $query = "SELECT items.name FROM items WHERE price < '". $price ."'";
    echo 'Результаты поиска:' . '</br>';
    foreach ($dbh->query($query) as $row) {
        echo 'Name:' . '&nbsp;' . $row['name'] . '&nbsp;' .'</br>';
    }
} catch (PDOException $e) {
    echo "Ошибка";
}