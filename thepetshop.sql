CREATE SCHEMA IF NOT EXISTS THEPETSHOP;
USE THEPETSHOP;

CREATE table if not exists PEOPLE(
	FNAME VARCHAR(30) NOT NULL,
    LNAME varchar(30) not null,
    ID CHAR(9) NOT NULL,
    ADDRESS VARCHAR(40),
    SEX CHAR,
    TEL_NUM INT,
    BDATE DATE,
    EMAIL varchar(20),
    PRIMARY KEY(ID)
    
    );
    
create TABLE IF NOT exists CUSTOMER(
	MEMBER_POINT INT,
    CUS_ID CHAR(9),
    PETSNAME varchar(10),
    foreign key (CUS_ID) references PEOPLE(ID)
    
    );
    


    
    
