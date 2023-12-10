CREATE DATABASE simpledb;
CREATE TABLE usernames(
    user_id int primary key unique auto_increment,
    username varchar(30) 
);
CREATE TABLE passwords(
    password_id int primary key unique auto_increment,
    da_password varchar(30)
); 