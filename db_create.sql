CREATE TABLE Customer (
	customerID int AUTO_INCREMENT NOT NULL,
	fname varchar (50) NOT NULL,
	lname varchar (50) NOT NULL,
	email varchar (50) NOT NULL,
	phone_number varchar (50) NOT NULL,
	PRIMARY KEY (customerID)
);

CREATE TABLE Orders (
	orderID int AUTO_INCREMENT NOT NULL,
	customerID int NOT NULL,
	cost decimal(15,2) NOT NULL,
	date_ordered date NOT NULL,
	date_shipped date NOT NULL,
	PRIMARY KEY (orderID)
);
CREATE TABLE Order_Products (
	opID int NOT NULL,
	orderID int NOT NULL,
	quantity int NOT NULL,
	cost decimal(15,2) NOT NULL,
	PRIMARY KEY (opID)
);

CREATE TABLE Customer_Order (
	orderID int  NOT NULL,
	customerID int NOT NULL
);

CREATE TABLE Shoe (
	shoeID int AUTO_INCREMENT NOT NULL,
	name varchar (50) NOT NULL,
	brand varchar (50) NOT NULL,
	cost double NOT NULL,
	size varchar (10) NOT NULL,
	style varchar (50) NOT NULL,
	color varchar (50) NOT NULL,
	image varchar (50),
	PRIMARY KEY (shoeID)
);

CREATE TABLE Customer_Address (
	addressID int AUTO_INCREMENT NOT NULL,
	customerID int NOT NULL,
	shipping_address varchar (50) NOT NULL,
	billing_address varchar (50) NOT NULL,
	PRIMARY KEY (addressID)
);

CREATE TABLE Custom_Shoe (
	custom_shoeID AUTO_INCREMENT int NOT NULL ,
	custom_shoeID int NOT NULL ,
	time_to_make int NOT NULL ,
	number_of_shoes int NOT NULL,
	PRIMARY KEY (custom_shoeID)
);

CREATE TABLE Employee (
	empID int AUTO_INCREMENT  NOT NULL,
	fname varchar (50) NOT NULL,
	lname varchar (50) NOT NULL,
	username varchar (50) NOT NULL,
	password varchar (100) NOT NULL,
	email varchar (50) NOT NULL,
	phone_number varchar (50) NOT NULL,
	PRIMARY KEY (empID)
);

CREATE TABLE Shoe_Description (
	descriptID int AUTO_INCREMENT NOT NULL,
	shoeID int NOT NULL,
	author varchar (50) NOT NULL,
	descript_text varchar (50) NOT NULL,
	creation_date date NOT NULL,
	PRIMARY KEY (descriptID)
);