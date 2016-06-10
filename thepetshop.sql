CREATE SCHEMA IF NOT EXISTS THEPETSHOP;
USE THEPETSHOP;

CREATE table if not exists PEOPLE(
	FNAME VARCHAR(30) NOT NULL,
    LNAME varchar(30) not null,
    ID CHAR(9) NOT NULL,
    ADDRESS VARCHAR(40),
	TEL_NUM varchar(20) NOT NULL,
	BDATE DATE NOT NULL,
    EMAIL varchar(30),
    SEX CHAR NOT NULL,
    PRIMARY KEY(ID)
    
    );
    
create TABLE IF NOT exists CUSTOMER(
	MEMBER_POINT INT,
    CUSTOMER_ID CHAR(9) NOT NULL,
    foreign key (CUSTOMER_ID) references PEOPLE(ID)
    
    );

CREATE TABLE IF NOT EXISTS PET(
	PET_ID CHAR(4),
    PET_NAME VARCHAR(10),
    CUS_ID CHAR(9),
    primary key(PET_ID),
    FOREIGN KEY (CUS_ID) REFERENCES CUSTOMER(CUSTOMER_ID)
    
    );
    
create TABLE IF NOT exists STAFF(
	STAFF_ID CHAR(9),
	START_DATE DATE,
    SALARY DECIMAL(10,2),
    DEGREE varchar(20),
    POSIT varchar(10) NOT NULL,
    WORK_DURATION CHAR(100),
    foreign key (STAFF_ID) references PEOPLE(ID)
    
    );
    
CREATE TABLE IF NOT exists ORDERS(
	ORDER_ID CHAR(9) not null,
    CUS_ID CHAR(9) not null,
    STA_ID CHAR(9) not null,
    ODATE DATE,
    PAYMENT_METHOD varchar(10),
    TOTAL_PRICE DECIMAL(10,2),
    PRIMARY KEY(ORDER_ID),
    foreign key(CUS_ID) references CUSTOMER(CUSTOMER_ID),
    FOREIGN KEY(STA_ID) REFERENCES STAFF(STAFF_ID)
    );
    
create TABLE IF NOT EXISTS SERVICE(
	SERVICE_ID CHAR(9) NOT NULL,
    SER_NAME varchar(20) NOT NULL,
    SER_PRICE DECIMAL(10,2) NOT NULL,
    primary key(SERVICE_ID)
    
    );
    
CREATE table IF NOT exists PRODUCT(
	PRODUCT_ID char(9) NOT NULL,
	PRO_NAME varchar(20) NOT NULL,
    AMOUNT INT NOT NULL,
    PRO_PRICE DECIMAL(10,2) NOT NULL,
    primary key(PRODUCT_ID)
    
    );
    
create TABLE IF NOT exists ORDER_DETAIL(
	OID CHAR(9),
    SER_ID CHAR(9),
    PRO_ID CHAR(9),
    QUANTITY INT,
    PRICE DECIMAL(10,2),
    FOREIGN KEY(SER_ID) references SERVICE(SERVICE_ID),
    foreign key(PRO_ID) references PRODUCT(PRODUCT_ID),
    foreign key (OID) references ORDERS(ORDER_ID)
    
	);
    
