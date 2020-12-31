CREATE DATABASE project;
use project;
CREATE TABLE MEMBER(
	Id INT NOT NULL,
    Name TEXT NOT NULL, 
	Account varchar(50) NOT NULL,  
	Password varchar (20) NOT NULL,
    PhoneNumber TEXT,
    Credit INT NOT NULL,
    Address TEXT NOT NULL,
    Sex TEXT NOT NULL,
    Birthday DATE NOT NULL,
    Email TEXT NOT NULL,
    primary key(Id)
);

CREATE TABLE PRODUCT(
	Id INT NOT NULL,
    ClickCount INT NOT NULL, 
    Description TEXT,
    Price INT NOT NULL,
    Quantity INT NOT NULL,
    primary key(Id)
);

create table ORDERLIST(
	Id INT NOT NULL,
    MemberId INT NOT NULL,
    ProductQuantity INT NOT NULL,
    foreign key (MemberId) references MEMBER(Id),
    primary key(Id)
);

create table COUPON(
	Id INT NOT NULL,
    MemberId INT NOT NULL,
    C_Date DATE NOT NULL,
    Discount INT NOT NULL,
    foreign key (MemberId) references MEMBER(Id),
    primary key(Id)
);

create table SHOPPINGCART(
	MemberId INT NOT NULL,
    ProductId INT NOT NULL,
    S_Date DATETIME NOT NULL,
    foreign key (MemberId) references MEMBER(Id),
	foreign key (ProductId) references PRODUCT(Id)
);

create table COMMENT(
	MemberId INT NOT NULL,
    ProductId INT NOT NULL,
    Star INT NOT NULL,
    Description TEXT NOT NULL,
    foreign key (MemberId) references MEMBER(Id),
	foreign key (ProductId) references PRODUCT(Id)
);

describe project.COMMENT;
