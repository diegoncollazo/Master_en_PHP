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
mysql -u root -p
-- zaq1XSW"

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
id, name, lastname, email, password, website) 
VALUES
(3,"Nicolas","Collazo","asd@asd.net","myPASS", "github.com");

-- Borrar tablas
DROP TABLE usuarios;

-- Modificar tablas
-- Renombar tabla
ALTER TABLE usuarios RENAME TO renombrados;

-- Renombrar columnas
ALTER TABLE renombrados CHANGE lastname apellidos VARCHAR(100) NULL;

-- Modificar el tipo en la columna
ALTER TABLE renombrados MODIFY lastname CHAR(50) NOT NULL;

-- Agregar columna
ALTER TABLE renombrados ADD website VARCHAR(100) NULL;

-- Agregar restriccion a columna
ALTER TABLE renombrados ADD CONSTRAINT uq_email UNIQUE(email);

-- Borrar una columna
ALTER TABLE renombrados DROP website;