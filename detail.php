<?php
$id = $_GET["id"];

// DB接続(insert.phpとかから持ってきてください)
try {
    $db_name = 'gs_db';    //データベース名
    $db_id   = 'root';      //アカウント名
    $db_pw   = '';      //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}


//3．データ登録SQL作成
// WHERE id=:idを利用して、１つだけ情報を取得してください。
$stmt = $pdo->prepare('SELECT * FROM gs_an_book WHERE id=:id;');
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();



//4．データ表示
$result = '';
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    $result = $stmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新</title>
</head>
<body>
    <form method="POST" action="update.php">
        <label>書籍のタイトル：<input type="text" name="name" value="<?= $result['book_name'] ?>"></label><br>
        <label>書籍のURL：<input type="text" name="url" value="<?= $result['book_url'] ?>"></label><br>
        <label>読んだ日：<input type="date" name="date" value="<?= date('Y-m-d', strtotime($result['date'])) ?>"></label><br>
        <!-- <label>読んだ日：<input type="date" name="date" value="<?= $result['date'] ?>"></label><br> -->
        <label>コメント：<textArea name="comment" rows="4" cols="40"><?= $result['comment'] ?></textArea></label><br>
        <label>アクション：<textArea name="action" rows="4" cols="40"><?= $result['action'] ?></textArea></label><br>
        <label>振り返り：<textArea name="reflection" rows="4" cols="40"><?= $result['reflection'] ?></textArea></label><br>
        <!-- <label>コメント：<textArea name="comment" rows="4" cols="40" value="<?= $result['comment'] ?>"></textArea></label><br>
        <label>アクション：<textArea name="action" rows="4" cols="40" value="<?= $result['action'] ?>"></textArea></label><br>
        <label>振り返り：<textArea name="reflection" rows="4" cols="40" value="<?= $result['reflection'] ?>"></textArea></label><br> -->
        <input type="hidden" name="id" value="<?= $result['id'] ?>">
        <input type="submit" value="更新">
    </form>
</body>
</html>