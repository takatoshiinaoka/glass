# DB / テーブルの作成


## DBの作成

まずは基本単位となるDBを作成する．

1つのアプリケーションに対して1つのDB，というイメージでOK．

- [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/)にアクセス
- 「`Databases`」タブをクリック
- 「`Database name`」に「`glasses_webapp`」を入力（DB名）
- 「`utf8mb4_unicode_ci`」を選択→「作成」をクリック

正常に作成されると，画面左側に作成したDB名が表示される．
### usersテーブルの作成

1. 左側のDB一覧から前項で作成したDBを選択する．
2. 名前欄に「`users`」を入力（テーブル名）．
3. カラム数を「6」に設定する．
4. 「Go」ボタンをクリック．

### カラムの設定

|カラム名|データ型|長さ|その他設定項目|
|---|---|---|---|
|`user_id`|INT|12|インデックスを「PRIMARY」に設定．</br>「A_I」にチェック．|
|`user_name`|VARCHAR|128||
|`mail`|VARCHAR|128||
|`password`|DATE|-||
|`user_flag`|INT|-||
|`created_at`|DATETIME|-||
|`updated_at`|DATETIME|-||

### glassesテーブルの作成

1. 左側のDB一覧から前項で作成したDBを選択する．
2. 名前欄に「`glasses`」を入力（テーブル名）．
3. カラム数を「10」に設定する．
4. 「Go」ボタンをクリック．

### カラムの設定

|カラム名|データ型|長さ|その他設定項目|
|---|---|---|---|
|`glass_id`|INT|12|インデックスを「PRIMARY」に設定．</br>「A_I」にチェック．|
|`glass_name`|VARCHAR|128||
|`maker`|VARCHAR|128||
|`model_number`|INT|-||
|`tag_id`|INT|-||
|`user_id`|INT|-||
|`image_id`|INT|-||
|`year`|INT|-||
|`glass_flag`|INT|-||
|`updated_at`|DATETIME|-||
|`created_at`|DATETIME|-||

全て入力したら右下の「保存する」をクリック！！

### imagesテーブルの作成

1. 左側のDB一覧から前項で作成したDBを選択する．
2. 名前欄に「`images`」を入力（テーブル名）．
3. カラム数を「3」に設定する．
4. 「Go」ボタンをクリック．

### カラムの設定

|カラム名|データ型|長さ|その他設定項目|
|---|---|---|---|
|`image_id`|INT|12|インデックスを「PRIMARY」に設定．</br>「A_I」にチェック．|
|`image_path`|VARCHAR|128||
|`image_flag`|INT|-||
|`updated_at`|DATETIME|-||
|`created_at`|DATETIME|-||

### tagsテーブルの作成

1. 左側のDB一覧から前項で作成したDBを選択する．
2. 名前欄に「`tags`」を入力（テーブル名）．
3. カラム数を「2」に設定する．
4. 「Go」ボタンをクリック．

### カラムの設定

|カラム名|データ型|長さ|その他設定項目|
|---|---|---|---|
|`tag_id`|INT|12|インデックスを「PRIMARY」に設定．</br>「A_I」にチェック．|
|`tag_name`|VARCHAR|128||

### tweetsテーブルの作成

1. 左側のDB一覧から前項で作成したDBを選択する．
2. 名前欄に「`tweets`」を入力（テーブル名）．
3. カラム数を「3」に設定する．
4. 「Go」ボタンをクリック．

### カラムの設定

|カラム名|データ型|長さ|その他設定項目|
|---|---|---|---|
|`glasses_id`|INT|12|インデックスを「PRIMARY」に設定．</br>「A_I」にチェック．|
|`tweet`|VARCHAR|128||
|`tweet_flag`|INT|-||
|`updated_at`|DATETIME|-||
|`created_at`|DATETIME|-||
