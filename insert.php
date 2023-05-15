<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$sql="INSERT INTO `members`( `name`, `addr`, `telphone`, `email`, `acc`, `pw`) 
                    VALUES ('{$_POST['name']}','{$_POST['addr']}','{$_POST['telphone']}','{$_POST['email']}','{$_POST['acc']}','{$_POST['pw']}')";

$pdo->exec($sql);
header("location:index.php");