create database cart;

use cart;

create table products (
id INT(11) not null auto_increment,
name varchar(100) not null,
image VARCHAR(300) not null,
price float not null,
primary key (id)

);