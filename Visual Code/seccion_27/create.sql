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
    id INT(11) NOT NULL AUTO_INCREMENT,
    name varchar(100)NOT NULL,
    lastname varchar(100) DEFAULT 'sin apellido',
    email varchar(100)NOT NULL,
    password varchar(100),
    PRIMARY KEY(id)
);

INSERT INTO usuarios(
id, name, lastname, email, password) 
VALUES
(1,"Diego","Collazo","asd@asd.net","myPASS");

-- Borrar tablas
DROP TABLE usuarios;

-- Modificar tablas
-- Renombar tabla
ALTER TABLE usuarios RENAME TO renombrados;
-- Renombrar columnas
ALTER TABLE renombrados CHANGE lastname apellidos VARCHAR(100) NULL;

