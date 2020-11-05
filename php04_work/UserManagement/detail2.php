<?php
require_once("funcs2.php");

$id = $_GET['id'];
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=" . $id);
$status = $stmt->execute();


//３．データ表示
$view = "";
if ($status == false) {
    sql_error($status);
} else {
    $result = $stmt->fetch();}
        //GETデータ送信リンク作成
        // <a>で囲う。
    //     $view .= '<p>';
    //     $view .= '<a href="detail.php?id=' . $result["id"].'">';
    //     $view .= $result["indate"] . "：" . $result["name"];
    //     $view .= '</p>';
    // }
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>フリーアンケート表示</title>
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body id="main">
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index2.php">データ登録</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron">
            <a href="detail2.php"></a>
            <?= $view ?>
        </div>
    </div>
    <!-- Main[End] -->

<!-- Main[Start] -->
<form method="POST" action="update2.php">
<div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>名前：<input type="text" name="name" value=<?= $result['name'] ?>></label><br>
     <label>ID：<input type="text" name="lid" value=<?= $result['lid'] ?>></label><br>
     <label>PW：<input type="text" name="lpw" value=<?= $result['lpw'] ?>></label><br>
     <input type="hidden" name="kanri_flg" value="0">
     <label>管理者：<input type="checkbox" name="kanri_flg" value="1" <?= $result['kanri_flg']==1 ? 'checked' : '' ?>></label><br>
     <input type="hidden" name="life_flg" value="0">
     <label>退職者：<input type="checkbox" name="life_flg" value="1" <?= $result['life_flg']==1 ? 'checked' : '' ?>></label><br>
     <input type="hidden" name="id" value="<?= $id ?>">
     <input type="submit" value="登録">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>

</html>

