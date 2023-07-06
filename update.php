<?php
//1. POSTデータ取得
$name   = $_POST['book_name'];
$url  = $_POST['book_url'];
$date    = $_POST['date'];
$comment = $_POST['comment'];
$action = $_POST['action'];
$reflection = $_POST['reflection'];
$id = $_POST['id']; // ←追加

//2. DB接続します
try {
    $db_name = 'gs_db';    //データベース名
    $db_id   = 'root';      //アカウント名
    $db_pw   = '';      //パスワード：XAMPPはパスワード無しに修正してください。
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}

//３．データ登録SQL作成

// UPDATE文にする
$stmt = $pdo->prepare( 'UPDATE gs_an_book SET book_name = :book_name, book_url = :book_url, comment = :comment, action = :action, reflection = :reflection, date = sysdate() WHERE id = :id;' );

$stmt->bindValue(':book_name', $name, PDO::PARAM_STR);/// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':book_url', $url, PDO::PARAM_STR);/// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);/// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':action', $action, PDO::PARAM_STR);/// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':reflection', $reflection, PDO::PARAM_STR);// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':id', $id, PDO::PARAM_INT);// 数値の場合 PDO::PARAM_INT
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: select.php');
    exit();
}



?>