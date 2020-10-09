/*
int
varchar
char
float
date
time
timestamp

text
mediumtext
longtext
*/
CREATE TABLE blog.usuarios
(
    id INT,
    name varchar(100),
    lastname varchar(100),
    email varchar(100),
    password varchar(100)
)
INSERT INTO `usuarios`(`id`, `name`, `lastname`, `email`, `password`) 
VALUES (1,"Diego","Collazo","asd@asd.net","myPASS")