# DB にデータを入れる

データベースにコマンドをコピペしてデータを追加していきます．イメージテーブルは内山さんが担当ですが連絡がつかないのでこれを見たら，このファイルを編集して，みんなが同じデータが入った DB を使えるようにしてください．

## glasses テーブル

以下の文を実行する．

        INSERT INTO glasses (glass_id, maker, model_number, user_id, image_id,year_start,year_end,generation,glass_flag,updated_at,created_at) VALUES(NULL, 'jins','UNF-20S-110AA','1','1', '2020-10-18','',2,1, now(), now());

## tags テーブル

以下の 4 つを実行する．

1

        INSERT INTO tags (tag_id,tag_name) VALUES(NULL,'黒');

2

        INSERT INTO tags (tag_id,tag_name) VALUES(NULL,'赤');

3

        INSERT INTO tags (tag_id,tag_name) VALUES(NULL,'青');

4

        INSERT INTO tags (tag_id,tag_name) VALUES(NULL,'ブルーライトカット');

## glasses_tags テーブル

        INSERT INTO glasses_tags (id,tag_id,grass_id) VALUES(NULL,1,1);

## users テーブル

        INSERT INTO users (user_id,user_name,mail,password,user_flag,created_at,updated_at) VALUES(NULL,'メガネ太郎','abc@glass.com','password',1,now(),now())

## tweets テーブル

        INSERT INTO tweets (glasses_id,tweet,tweet_flag,updated_at,created_at) VALUES (1,'ここにメッセージを入力します',1,now(),now())
