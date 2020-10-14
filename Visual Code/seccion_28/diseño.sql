CREATE TABLE usuarios(
    id INT(255) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password  VARCHAR(100) NOT NULL,
    fecha DATE NOT NULL,
    CONSTRAINT PK_usuarios PRIMARY KEY(id),
    CONSTRAINT UQ_email UNIQUE(email)
) ENGINE = InnoDb;

CREATE TABLE categorias(
    id INT(255) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    CONSTRAINT PK_categorias PRIMARY KEY(id)
) ENGINE = InnoDb;

CREATE TABLE entradas(
    id INT(255) NOT NULL AUTO_INCREMENT,
    usuario_id INT(255) NOT NULL,
    categoria_id INT(255) NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    descripcion MEDIUMTEXT NULL,
    fecha DATE NOT NULL,
    CONSTRAINT PK_entradas PRIMARY KEY(id),
    CONSTRAINT FK_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT FK_categorias FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON UPDATE CASCADE
    -- CONSTRAINT FK_categorias FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE CASCADE
    -- CONSTRAINT FK_categorias FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE SET NULL
) ENGINE = InnoDb;