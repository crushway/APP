create table app_user(
id int(10)auto_increment,
username varchar(10) not null,
password char(20) not null,
token char(40) default null,
phone char(11)not null,
user_email char(30),
money int(10) default 0,
    primary key(id)
)；
create table app_shop(
shop_id int(10)auto_increment,
shop_name varchar(20) not null,
shop_type varchar(20) not null,
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
goods_type varchar(20) not null,
goods_picture char(100) default null,
goods_price int(10) not null,
goods_description text,
goods_stock int(10) default 0,
primary key(goods_id) ,
foreign key(goods_shop_id) references app_shop(shop_id)
)
;


create table app_address(
address_id int(10) auto_increment,
address_user_id int (10) not null,
address_name varchar(20) not null,
address_info varchar(100),
address_phone char(11),
primary key(address_id),
foreign key(address_user_id) references app_user(id)

);
 create table app_favorite(
favorite_id int(10) auto_increment,
favorite_user_id int(10) not null,
favorite_shop_id int(10) not null,
favorite_shop_name varchar(20) not null,
primary key(favorite_id),
foreign key(favorite_user_id) references app_user(id)

 	);
 create table app_order(
order_id int(10) auto_increment,
order_shop_id int(10) not null, comment 商店的id其实可以不要，具体信息要另外存，防止原有信息修改后历史无法看
order_shop_name varchar(20) not null,
order_total_price int(10) not null,
order_time varchar(30) not null,
order_pay_way enum('在线支付','现金支付') not null,
order_pay_status enum('0','1') default '0',
order_receive_name varchar(20) not null,
order_receive_phone char(11) not null,
order_receive_address_info varchar(100) not null,
primary key(order_id)
 	);
create table app_orderDetail(
orderDetail_id int(10) auto_increment,
orderDetail_order_id int(10) not null,

orderDetail_goods_name varchar(20),
orderDetail_goods_price int(10),
orderDetail_number int (10),
primary key(orderDetail_id),
foreign key(orderDetail_order_id) references app_order(order_id)

);