<?php
// var_dump($_POST);
// exit();

//データベースに接続
include('functions.php');
$pdo=connect_to_db();

//GETのデータを変数に代入
$keyword=$_GET['keyword'];

$sql = "UPDATE `menu_table` SET `num` = :num+1 WHERE `menu_table`.`keyword` = :keyword;";

$stmt = $pdo->prepare($sql);
// $stmt->bindValue(':num', $num, PDO::PARAM_STR);
// $stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  //SQLが実行出来たら検索結果画面に移動
  header("Location:index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
</head>
<body>
    <a href="serch_view.php">検索</a>
  </form>
</body>
</html>