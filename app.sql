create table app_user(
id int(10)auto_increment,
username varchar(10) not null,
password char(20) not null,
phone char(11)not null,
user_email char(30),
money int(10) default 0,
    primary key(id)
)