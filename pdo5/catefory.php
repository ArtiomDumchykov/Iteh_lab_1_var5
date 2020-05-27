<?php


$dsn = "mysql:host=localhost; dbname=var5";
$user = 'root';
$pass = 'root';
try {
    $dbh = new PDO($dsn, $user, $pass);

    $category = $_GET["category"];

    $query = "SELECT items.name FROM items , category WHERE items.FID_Category = category.ID_Category AND category.name ='". $category ."'";

    foreach ($dbh->query($query) as $row) {
        echo 'Name:' . '&nbsp;' . $row['name'] . '&nbsp;' .'</br>';
    }
} catch (PDOException $e) {
    echo "Ошибка";
}