<?php 
$dsn = "mysql:host=localhost;dbname=zrwqb921_portfolio;charset=utf8mb4";

try {
    $connection = new PDO($dsn, 'zrwqb921_general', 'bs77lll%n+hU');
} catch (Exception $e) {
    error_log($e->getMessage());
    exit('unable to connect');
}
?>