<?php 
$dsn = "mysql:host=localhost;dbname=portfolio;charset=utf8mb4";
// $connect = new mysqli('localhost','root','root','portfolio');

try {
    $connection = new PDO($dsn, 'root', 'root');
} catch (Exception $e) {
    error_log($e->getMessage());
    exit('unable to connect');
}
?>