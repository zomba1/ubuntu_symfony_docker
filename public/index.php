<?php
$user='root';
$pass='hello';

$dsn='mysql:host=db; dbname=app_db; charset=utf8';
$pdo=new PDO($dsn, $user, $pass);

$stmt=$pdo->query('select * from test');
$row=$stmt->fetch();

print_r($row);
