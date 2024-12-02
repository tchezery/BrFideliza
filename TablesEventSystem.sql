CREATE DATABASE BrFideliza;
USE BrFideliza;

drop database BrFideliza;
 
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
    description VARCHAR(500),
	num_participant INT,
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
    ticket VARCHAR(45),
    FOREIGN KEY (id_participant) REFERENCES participant (id_participant),
	FOREIGN KEY (id_event) REFERENCES event (id_event)
);






	