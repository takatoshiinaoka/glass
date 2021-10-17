<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>画像をアップロード</title>
        <meta name="description" content="画像ファイルをアップロードします。">
    </head>
    <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    アップロードする画像ファイルを選択する:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
    </form>
    <div>
    <?php
    // データベース設定ファイルを含む
    include 'dbConfig.php';

    // データベースから画像を取得する
    $query = $db->query("SELECT * FROM images ORDER BY updated_at DESC");

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $imageURL = 'uploads/'.$row["file_name"];
    ?>
        <img src="<?php echo $imageURL; ?>" alt="" />
    <?php }
    }else{ ?>
        <p>画像が見つからず表示されません
        </p>
    <?php } ?>
    </div>
    </body>
</html>