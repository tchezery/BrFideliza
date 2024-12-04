CREATE DATABASE BrFideliza;
USE BrFideliza;

drop database brfideliza;
 
CREATE TABLE participant (
	id_participant INT auto_increment PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    cpf VARCHAR(14),
	email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    password VARCHAR(100) NOT NULL
);

CREATE TABLE administrator(
	id_administrator INT auto_increment PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    cpf VARCHAR(14),	
    email VARCHAR(255) NOT NULL,
    phone VARCHAR (20),
    password VARCHAR(100) NOT NULL
);

select * from administrator;

CREATE TABLE event(
	id_event INT auto_increment PRIMARY KEY,
    name VARCHAR(255),
    categories VARCHAR(45),
    address VARCHAR(300),
    cost DECIMAL(10, 2),
    num_participant INT,
    datetime_event DATETIME,
    description VARCHAR(500),
    id_administrator INT,
    FOREIGN KEY (id_administrator) REFERENCES administrator (id_administrator)
);

CREATE TABLE registration(
	id_registration INT auto_increment PRIMARY KEY,
	id_participant INT,
    id_event INT, 
    qrcode VARCHAR(45),
    datetime_payment DATETIME,
    status VARCHAR(45),
    ticket INT NOT NULL DEFAULT (FLOOR(RAND() * (8999 - 1223 + 1)) + 1000),
    FOREIGN KEY (id_participant) REFERENCES participant (id_participant),
	FOREIGN KEY (id_event) REFERENCES event (id_event)
);






	