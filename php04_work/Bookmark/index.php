<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <a class="navbar-brand" href="bm_list_view.php">データ一覧</a>
    <a class="navbar-brand" href="../UserManagement/index2.php">ユーザー登録</a>
    <a class="navbar-brand" href="../UserManagement/select2.php">ユーザー表示</a>
    <a class="navbar-brand" href="../UserManagement/login.php">ログイン</a>
    <a class="navbar-brand" href="../UserManagement/logout.php">ログアウト</a>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form action="insert.php" method="POST">
  <div class="jumbotron">
   <fieldset>
    <legend>フォームの記入</legend>
     <label>書籍名：<input type="text" name="name"></label><br>
     <label>書籍URL：<input type="text" name="url"></label><br>
     <label><textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <a class="navbar-brand" href="bm_list_view2.php">一般公開データ一覧</a>
    </div>
  </nav>
</header>

</body>
</html>
