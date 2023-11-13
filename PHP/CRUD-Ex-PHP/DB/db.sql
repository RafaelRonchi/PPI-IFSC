create database if not exists crud;
use crud;

create table usr(
    id int not null auto_increment,
    namev varchar(255) not null,
    email varchar(255) not null,
    pass varchar(255) not null,
    primary key(id)
);

select * from usr;