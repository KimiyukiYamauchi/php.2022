-- データベースに接続
mysql -u root -p

-- データベースの作成
CREATE DATABASE IF NOT EXISTS myapp DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- データベースの切り替え
use myapp;

-- テーブル作成
CREATE TABLE todos (
  id INT NOT NULL AUTO_INCREMENT,
  is_done BOOL DEFAULT false,
  title TEXT,
  PRIMARY KEY (id)
);

-- データの追加
INSERT INTO todos (title) VALUES ('aaa');
INSERT INTO todos (title, is_done) VALUES ('bbb', true);
INSERT INTO todos (title) VALUES ('ccc');

SELECT * FROM todos;