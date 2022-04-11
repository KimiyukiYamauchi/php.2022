-- データベース名  -> wp
-- データベースのユーザ名 -> wp
-- データベースのパスワード -> pass
-- データベースのホスト名(サーバ名) -> localhost
drop database if exists wp;
create database wp default character set utf8 collate utf8_general_ci;
grant all on wp.* to 'wp'@'localhost' identified by 'pass';
use wp;