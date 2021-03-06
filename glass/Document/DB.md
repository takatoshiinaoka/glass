# DB / テーブルの作成

## DB の作成

まずは基本単位となる DB を作成する．

1 つのアプリケーションに対して 1 つの DB，というイメージで OK．

- [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/)にアクセス
- 「`Databases`」タブをクリック
- 「`Database name`」に「`glasses_webapp`」を入力（DB 名）
- 「`utf8mb4_unicode_ci`」を選択 →「作成」をクリック

正常に作成されると，画面左側に作成した DB 名が表示される．

### users テーブルの作成

1. 左側の DB 一覧から前項で作成した DB を選択する．
2. 名前欄に「`users`」を入力（テーブル名）．
3. カラム数を「7」に設定する．
4. 「Go」ボタンをクリック．

### カラムの設定

| カラム名     | データ型 | 長さ | その他設定項目                                            |
| ------------ | -------- | ---- | --------------------------------------------------------- |
| `user_id`    | INT      | 12   | インデックスを「PRIMARY」に設定．</br>「A_I」にチェック． |
| `user_name`  | VARCHAR  | 128  |                                                           |
| `mail`       | VARCHAR  | 128  |                                                           |
| `password`   | VARCHAR  | 128  |                                                           |
| `user_flag`  | INT      | -    |                                                           |
| `created_at` | DATETIME | -    |                                                           |
| `updated_at` | DATETIME | -    |                                                           |

### glasses テーブルの作成

1. 左側の DB 一覧から前項で作成した DB を選択する．
2. 名前欄に「`glasses`」を入力（テーブル名）．
3. カラム数を「11」に設定する．
4. 「Go」ボタンをクリック．

### カラムの設定

| カラム名       | データ型 | 長さ | その他設定項目                                                 |
| -------------- | -------- | ---- | -------------------------------------------------------------- |
| `glass_id`     | INT      | 12   | インデックスを「PRIMARY」に設定．</br>「A_I」にチェック． 　　 |
| `maker`        | VARCHAR  | 128  |                                                                |
| `model_number` | VARCHAR  | 128  |                                                                |
| `user_id`      | INT      | -    |                                                                |
| `image_id`     | INT      | -    |                                                                |
| `year_start`   | DATE     | -    |                                                                |
| `year_end`     | DATE     | -    |                                                                |
| `generation`   | INT      | -    |                                                                |
| `glass_flag`   | INT      | -    |                                                                |
| `updated_at`   | DATETIME | -    |                                                                |
| `created_at`   | DATETIME | -    |                                                                |

全て入力したら右下の「保存する」をクリック！！

### tags テーブルの作成

1. 左側の DB 一覧から前項で作成した DB を選択する．
2. 名前欄に「`tags`」を入力（テーブル名）．
3. カラム数を「2」に設定する．
4. 「Go」ボタンをクリック．

### カラムの設定

| カラム名   | データ型 | 長さ | その他設定項目                                            |
| ---------- | -------- | ---- | --------------------------------------------------------- |
| `tag_id`   | INT      | 12   | インデックスを「PRIMARY」に設定．</br>「A_I」にチェック． |
| `tag_name` | VARCHAR  | 128  |                                                           |

### glasses_tags テーブルの作成

1. 左側の DB 一覧から前項で作成した DB を選択する．
2. 名前欄に「`glasses_tags`」を入力（テーブル名）．
3. カラム数を「3」に設定する．
4. 「Go」ボタンをクリック．

### カラムの設定

| カラム名   | データ型 | 長さ | その他設定項目                                            |
| ---------- | -------- | ---- | --------------------------------------------------------- |
| `id`       | INT      | 12   | インデックスを「PRIMARY」に設定．</br>「A_I」にチェック． |
| `tag_id`   | VARCHAR  | 128  |                                                           |
| `grass_id` | VARCHAR  | 128  |                                                           |

### images テーブルの作成

1. 左側の DB 一覧から前項で作成した DB を選択する．
2. 名前欄に「`images`」を入力（テーブル名）．
3. カラム数を「5」に設定する．
4. 「Go」ボタンをクリック．

### カラムの設定

| カラム名     | データ型 | 長さ | その他設定項目                                            |
| ------------ | -------- | ---- | --------------------------------------------------------- |
| `image_id`   | INT      | 12   | インデックスを「PRIMARY」に設定．</br>「A_I」にチェック． |
| `image_name` | VARCHAR  | 128  |                                                           |
| `image_flag` | INT      | -    |                                                           |
| `updated_at` | DATETIME | -    |                                                           |
| `created_at` | DATETIME | -    |                                                           |

### tweets テーブルの作成

1. 左側の DB 一覧から前項で作成した DB を選択する．
2. 名前欄に「`tweets`」を入力（テーブル名）．
3. カラム数を「5」に設定する．
4. 「Go」ボタンをクリック．

### カラムの設定

| カラム名     | データ型 | 長さ | その他設定項目                                            |
| ------------ | -------- | ---- | --------------------------------------------------------- |
| `glasses_id` | INT      | 12   | インデックスを「PRIMARY」に設定．</br>「A_I」にチェック． |
| `tweet`      | VARCHAR  | 128  |                                                           |
| `tweet_flag` | INT      | -    |                                                           |
| `updated_at` | DATETIME | -    |                                                           |
| `created_at` | DATETIME | -    |                                                           |
