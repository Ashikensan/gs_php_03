<?php

/**
 * 1. index.phpのフォームの部分がおかしいので、ここを書き換えて、
 * insert.phpにPOSTでデータが飛ぶようにしてください。
 * 2. insert.phpで値を受け取ってください。
 * 3. 受け取ったデータをバインド変数に与えてください。
 * 4. index.phpフォームに書き込み、送信を行ってみて、実際にPhpMyAdminを確認してみてください！
 */

//1. POSTデータ取得 $_POSTというグローバル変数を用いて、index.phpのformタグのmethod=POSTで送信されたデータを受け取る
$name = $_POST['name'];
$url = $_POST['url'];
$date = $_POST['date'];
$comment = $_POST['comment'];
$action = $_POST['action'];
$reflection = $_POST['reflection'];

//2. DB接続します
try {
  //ID:'root', Password: xamppは 空白 ''データベースに接続する　→①データベース名を入れる
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成
// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO gs_an_book(id, book_name, book_url, date, comment, action, reflection)
                        VALUES (NULL, :book_name, :book_url, sysdate(), :comment, :action, :reflection)");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
$stmt->bindValue(':book_name', $name, PDO::PARAM_STR);
$stmt->bindValue(':book_url', $url, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$stmt->bindValue(':action', $action, PDO::PARAM_STR);
$stmt->bindValue(':reflection', $reflection, PDO::PARAM_STR);
// SOLインジェクション（SQLの中身をいじられないように）

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  //５．登録が成功した場合の処理 index.phpへリダイレクト
  header('Location: index.php'); //headear('Location'と書くと左記のphpへ戻る)

}
?>
