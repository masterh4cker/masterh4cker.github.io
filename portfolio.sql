#*****************************************************
# Script to create ejdesign database
# Name			Date		Description
# Tabatha Foes		8/28/2020	Portfolio Database
#
#
#*******************************************************
DROP DATABASE IF EXISTS tfportfolio;
CREATE DATABASE tfportfolio;
USE tfportfolio;
CREATE TABLE IF NOT EXISTS employee
(
employeeID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
first_name VARCHAR(255) NOT NULL,
LAST_NAME VARCHAR(255) NOT NULL
);
CREATE TABLE IF NOT EXISTS visitor
(
	visitor_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	visitor_name VARCHAR(255) NOT NULL,
	visitor_email VARCHAR(255) NOT NULL,
	visitor_msg VARCHAR(255) NOT NULL,
	visit_date DATETIME NOT NULL,
	employeeID INT NOT NULL,
	FOREIGN KEY (employeeID) REFERENCES employee (employeeID)
	
);
# Insert test date into employee
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Buster', 'Bronco');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Joe', 'Vandal');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Aubie', 'Tiger');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Ralphie', 'Buffalo');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Bucky', 'Badger');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Max', 'Dog');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Sparty', 'Spartan');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Tabby', 'Cat');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Gus', 'Rat');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Billie', 'Rooster');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Pistol', 'Pete');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Archie', 'Eagle');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Baby', 'Jay');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Boss', 'Hog');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Benny', 'Bengal');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Fighting', 'Pickle');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Captain', 'Crane');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Duke', 'Horse');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Lenny', 'Chukar');
INSERT INTO employee
	(first_name, last_name)
VALUES
	('Jake', 'Ibis');
# Insert test data into visitor
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Snoop', 'snoopdog@rap.com', 'Hello', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Minnie', 'minni@mouse.com', 'Hi', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Daisy', 'daisy@me.com', 'Hey', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Donald', 'donald@duck.com', 'test', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Huey', 'huey@me.com', 'Contact me', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Lisa', 'lisa@flow.com', 'Good afternoon', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Billy', 'billy@goat.com', 'Bye', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Elmer', 'elmer@me.com', 'whats up?', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Winnie', 'winnie@me.com', 'testing', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Pluto', 'pluto@me.com', 'Hello', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Chip', 'chip@cookie.com', 'cookies!', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Max', 'max@thedog.com', 'need dog food', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Dale', 'dale@me.com', 'Hey', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Lizzy', 'lizzy@lulu.com', 'howdy', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Blue', 'blue@bird.com', 'chirp', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Buzz', 'buzz@toystory.com', 'To infinite and beyond', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Cup', 'cup@ofjoe.com', 'Coffee', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Lap', 'lap@top.com', 'test 1 2 3', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Horace', 'horace@me.com', 'Food', NOW(), 1);
INSERT INTO visitor
(visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
VALUES
	('Leo', 'leo@me.com', 'test', NOW(), 1);
use tfportfolio;
GRANT SELECT, INSERT, UPDATE, DELETE
ON tfportfolio.*
TO tf_user
IDENTIFIED by 'Pa$$w0rd';





















