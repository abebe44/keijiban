
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>silver_bulletinboard</title>
    </head>
    <body>
        <h2>サークル掲示板</h2>
        要望を自由に記述してください。<br>        <form action="" method="post">
            <input type="hidden" name="num"  placeholder="投稿番号" value=>
            <input type="text" name="name"  placeholder="名前" value=><br>
            <input type="text" name="com"  placeholder="コメント" value=><br>
            <input type="password" name="passText" placeholder="パスワード" value=>
            <input type="submit" name="submit"><br><br>
            <input type="number" name="delete" placeholder="削除対象番号">
            <input type="password" name="passDele" placeholder="パスワード">
            <button type="submit" name="dele">削除</button><br>
            <input type="number" name="edit" placeholder="編集対象番号">
            <input type="password" name="passEdit" placeholder="パスワード">
            <button type="submit" name="editButton">編集</button>
        </form>
            </body>
</html>
