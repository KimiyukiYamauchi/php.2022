create table profiles(
  id int primary key not null,
  name varchar(50) not null,
  body text,
  mail varchar(255)
) default character set=utf8;

insert into profiles values
  (1, '山田太郎', null, null),
  (2, '田中次郎', null, null),
  (3, '菊池三郎', null, null);
