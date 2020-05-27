<?php


$dsn = "mysql:host=localhost; dbname=var5";
$user = 'root';
$pass = 'root';
try {
    $dbh = new PDO($dsn, $user, $pass);

    $vendor = $_GET["vendor"];

    $query = "SELECT items.name FROM items , vendors WHERE items.FID_Vendor = vendors.ID_Vendors AND vendors.name = '". $vendor ."'";

    foreach ($dbh->query($query) as $row) {
        echo 'Name:' . '&nbsp;' . $row['name'] . '&nbsp;' .'</br>';
    }
} catch (PDOException $e) {
    echo "Ошибка";
}