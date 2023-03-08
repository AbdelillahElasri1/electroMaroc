create database electroMaroc;
use electroMaroc;
create table admin (
adminId int primary key not null auto_increment,
email varchar(100),
password varchar(60)
);


create table client (
clientId int primary key not null auto_increment,
phoneNumber int,
adress varchar(100),
city varchar(100),
email varchar(100),
password varchar(60)
);


create table category (
categoryId int primary key not null auto_increment,
categoryName varchar(100),
categoryDescription varchar(500),
categoryPic varchar(1000),
adminId int not null,
FOREIGN KEY (adminId) REFERENCES admin(adminId)
);


create table product (
productId int primary key not null auto_increment,
productName varchar(200),
referenceProduct varchar(500),
labelProduct varchar(500),
codeBar varchar(500),
purchasePrice float,
finalPrice float,
offrePrice float,
description varchar(500),
productPic varchar(1000),
productCategory varchar(500),
categoryId int not null,
FOREIGN KEY (categoryId) REFERENCES category(categoryId)
);


create table command (
commandID int primary key not null auto_increment,
dateOfCreation date,
sendingDate date,
deliveryDate date,
totalPrice float,
clientId int not null,
FOREIGN KEY (clientId) REFERENCES client(clientId)
);

create table componentProduct (
id int primary key not null auto_increment,
productId int not null,
FOREIGN KEY (productId) REFERENCES product(productId),
 commandId int not null,
 FOREIGN KEY (commandId) REFERENCES command(commandId),
 unitPrice float,
 totalProductPrice float
);