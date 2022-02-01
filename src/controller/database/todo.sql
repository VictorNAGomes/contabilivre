drop database if exists todoList;

create database if not exists todoList;

use todoList;

create table todo(
    id int not null primary key auto_increment,
    title varchar(60) not null,
    desc text not null,
    number int not null,
    enum(),
    deadLine date not null,
    
);