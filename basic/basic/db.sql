mysql -u root -p

create database library;

use library

create table books (
  title varchar(255),
  pub_year varchar(4),
  ISBN varchar(20)
);

-- phpMyadminを使って、data.csvをインポート

grant all on library.* to 'libuser'@'localhost' identified by 'password';