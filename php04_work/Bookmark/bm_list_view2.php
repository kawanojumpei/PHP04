<?php


include("funcs.php");

// require_once("funcs.php");
$pdo = db_conn();

// データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//データ表示
$view="";
if ($status==false) {
    sql_error($status);
}else{
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .="<p>";
    
    $view .= '<a href="bm_update_view.php?id=' . $result["id"].'">';
    $view .= $result['indate'] . ' ' . $result['name'] . ' ' . $result['comment'];
    $view .= '</a>';
    
    $view .='<a href=' . $result['url'] . '> 書籍URLはこちら </a>';

    $view .= '<a href="delete.php?id=' . $result["id"].'">';
    $view .= '</a>';

    $view .="</p>";
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron">
      <!-- <a href='bm_update_view.php'> -->
      <?= $view ?>
      </a>
    </div>
    
</div>
<!-- Main[End] -->

</body>
</html>
