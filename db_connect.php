<?php
$dns = 'mysql:host=shehabalqudiry.com;dbname=portfolio';
$user = 'root';
$pass = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
    $con = new PDO($dns, $user, $pass, $options);
    $con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo 'Failed To Connect ' . $e->getMessage();
}