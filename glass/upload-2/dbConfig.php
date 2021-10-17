<?php
// データベースの構成
$dbHost     = "localhost";
$dbUsername = "daisuke";
$dbPassword = "Daisuke0730";
$dbName     = "glasses_webapp";

// データベース接続の構築
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// 接続の確認
if ($db->connect_error) {
    die("接続に失敗しました: " . $db->connect_error);
}
?>