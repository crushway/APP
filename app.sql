create table app_user(
id int(10)auto_increment,
username varchar(10) not null,
password char(20) not null,
phone char(11)not null,
user_email char(30),
money int(10) default 0,
    primary key(id)
)；
create table app_shop(
shop_id int(10)auto_increment,
shop_name varchar(20) not null,
shop_picture char(100) not null,
shop_address char(100) default null,
shop_miniprice int(10) default 0,
shop_shiping_time varchar(20),
shop_avg_delivery_time varchar(20) default null,
primary key(shop_id)

);
create table app_goods(
goods_id int(10) auto_increment,
goods_shop_id int(10) not null,
goods_name varchar(20) not null,
goods_picture char(100) default null,
goods_price int(10) not null,
goods_description text,
goods_stock int(10) default 0,
primary key(goods_id) ,
foreign key(goods_shop_id) references app_shop(shop_id)
)
;
