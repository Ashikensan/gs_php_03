<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Execution</title>
</head>
<body>

 <header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand" href="select.php">実行管理一覧</a></div>
        </div>
    </nav>
</header>

<form method="post" action="insert.php">
    <div class="jumbotron">
        <fieldset>
            <legend>読書の振り返り</legend>
            <label>書籍のタイトル：<input type="text" name="name"></label><br>
            <label>書籍のURL：<input type="text" name="url"></label><br>
            <label>読んだ日：<input type="date" name="date"></label><br>
            <label>コメント：<textArea name="comment" rows="4" cols="40"></textArea></label><br>
            <label>アクション：<textArea name="action" rows="4" cols="40"></textArea></label><br>
            <label>振り返り：<textArea name="reflection" rows="4" cols="40"></textArea></label><br>
            <input type="submit" value="送信">
        </fieldset>
    </div>
</form>


</form>

</body>
</html>