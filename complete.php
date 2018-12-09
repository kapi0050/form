<?php

// セッションの開始
session_start();

$name = htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8');
$kana = htmlspecialchars($_SESSION['kana'], ENT_QUOTES, 'UTF-8');

// 接続設定
$user = 'root';
$pass = '';

// データベースに接続
$dsn = 'mysql:host=localhost;dbname=formdb1;charset=utf8';
$conn = new PDO($dsn, $user, $pass); //「$conn」は、任意のオブジェクト名

// データの追加
$sql = 'INSERT INTO formtb1(name, kana) VALUES("'.$name.'","'.$kana.'")';

$stmt = $conn -> prepare($sql);
$stmt -> execute();
?>

<html>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

<body>
    <form class="text-center bg-success text-warning">
        ありがとうございました
    </form>
</body>

</html>