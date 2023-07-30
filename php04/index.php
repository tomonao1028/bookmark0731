<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ブックマーク</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>div{padding: 10px;font-size:16px;}</style>
    </head>
    <body>

        <!-- Head[Start] -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                </div>
            </nav>
        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
        <form method="POST" action="insert.php">
            <div class="jumbotron">
                <fieldset>
                    <legend>ブックマークアプリ</legend>
                    <label>書籍名：<input type="text" name="syosekimei"></label><br>
                    <label>url：<input type="text" name="syosekiurl"></label><br>
                    <label>コメント:<textArea name="syosekicomment" rows="4" cols="40"></textArea></label><br>
                    <input type="submit" value="送信">
                </fieldset>
            </div>
        </form>
        <!-- Main[End] -->


    </body>
</html>
