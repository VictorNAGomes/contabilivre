drop database if exists games;

create database if not exists games;

use games;

create table game(
    id int not null primary key auto_increment,
    title varchar(60) not null,
    description text not null,
    price int not null,
    Platform enum("Console", "Desktop", "Mobile", "Multiplataforma") not null,
    played boolean not null,
    releaseDate date not null
);

create table gameCategory(
    id int not null primary key auto_increment,
    category varchar(80) not null,
    gameId int not null,
    CONSTRAINT fk_game_category foreign key (gameId) references game(id)
);