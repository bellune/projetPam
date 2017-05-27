create database statistique;
create table statistiques(
id int primary key  AUTO_INCREMENT,
dat datetime not null default '0000-00-00 00:00:00',
page varchar(250) not null,
ip varchar(15) not null,
hostname varchar(60) not null,
navigateur varchar(100) not null,
referer varchar(250) not null
);
