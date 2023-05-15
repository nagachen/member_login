<?php 
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$acc=$_POST['acc'];
$pw=$_POST['pw'];
//使用count讓其輸出0或1
$sql="select count(*) from members  
    where `acc`='{$acc}' && `pw`='{$pw}'";
$chk=$pdo->query($sql)->fetchColumn();

if($chk){
    echo "登入成功";
     header("location:index.php");
}else{
    echo "登入失敗，帳號或密碼錯誤";
    header("location:login.php?error=1");
}