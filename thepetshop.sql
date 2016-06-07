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
    
create TABLE IF NOT exists STAFF(
	STAFF_ID CHAR(9),
    POSIT varchar(10) NOT NULL,
	START_DATE DATE,
    SALARY DECIMAL(10,2),
    DEGREE varchar(20),
    foreign key (STAFF_ID) references PEOPLE(ID)
    
    );
    
CREATE TABLE IF NOT exists ORDERS(
	ORDER_ID CHAR(9),
    MEMBER_ID CHAR(9),
    ODATE DATE,
    PAYMENT_METHOD varchar(10),
    
    PRIMARY KEY(ORDER_ID),
    foreign key (MEMBER_ID) references PEOPLE(ID)
    
    );
    
create TABLE IF NOT EXISTS SERVICE(
	SERVICE_ID CHAR(9),
    SER_NAME varchar(20),
    SER_PRICE DECIMAL(10,2),
    primary key(SERVICE_ID)
    
    );
    
CREATE table IF NOT exists PRODUCT(
	PRODUCT_ID char(9),
	PRO_NAME varchar(20) NOT NULL,
    AMOUNT INT,
    PRO_PRICE DECIMAL(10,2),
    primary key(PRODUCT_ID)
    
    );
    
create TABLE IF NOT exists ORDER_DETAIL(
	ORDER_ID CHAR(9),
    SERVICE_ID CHAR(9),
    PRODUCT_ID CHAR(9),
    QUANTITY INT,
    
    FOREIGN KEY(SERVICE_ID) references SERVICE(SERVICE_ID),
    foreign key(PRODUCT_ID) references PRODUCT(PRODUCT_ID),
    foreign key (ORDER_ID) references ORDERS(ORDER_ID)
    
	);
    
