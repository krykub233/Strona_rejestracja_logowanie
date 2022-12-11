CREATE DATABASE krystian_szkola;

USE krystian_szkola;



CREATE TABLE student(
    id INT(20) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20),
    surname VARCHAR(20)
);


CREATE TABLE class(
  id INT(20) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(20)
);


CREATE TABLE teacher(
  id INT(20) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(20),
  surname VARCHAR(20),
  age INT(2)
);


CREATE TABLE subject_(
  id INT(20) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(20)
);

CREATE TABLE users(
    id INT(20) AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(20),
    password VARCHAR(20),
    name VARCHAR(50),
    surname VARCHAR(50),
    age INT,
    role VARCHAR(50)
);



ALTER TABLE student
ADD FOREIGN KEY (id)
REFERENCES class(id); 

ALTER TABLE subject_
ADD FOREIGN KEY (id)
REFERENCES class(id);

ALTER TABLE subject_
ADD FOREIGN KEY (id)
REFERENCES teacher(id);