drop database if exists loginsystem;
create database loginsystem;
use loginsystem;

create table users (
sifra int not null primary key auto_increment,
firstName varchar(155) not null,
email varchar(155) not null,
userName varchar(155) not null,
password varchar(155) not null
);