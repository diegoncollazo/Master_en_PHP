INSERT INTO
    usuarios
VALUES
    (
        null,
        'Admin',
        'Admin',
        'admin@admin.com',
        'zse4',
        CURDATE()
    );

-- Busco usuarios con entrada
SELECT
    *
FROM
    usuarios
WHERE
    id IN (
        SELECT
            usuario_id
        FROM
            entradas
    );

-- Busco usuarios sin entrada
SELECT
    *
FROM
    usuarios
WHERE
    id NOT IN (
        SELECT
            usuario_id
        FROM
            entradas
    );

-- Busco usuarios con entrada cuando el titulo contenga GTA
SELECT
    nombre,
    apellido
FROM
    usuarios
WHERE
    id IN (
        SELECT
            usuario_id
        FROM
            entradas
        WHERE
            titulo LIKE '%GTA%'
    );

SELECT
    *
FROM
    entradas
WHERE
    titulo LIKE '%GTA%';

-- Todas las entradas de la categoria accion utilizando su nombre
SELECT
    titulo
FROM
    entradas
WHERE
    categoria_id IN (
        SELECT
            id
        FROM
            categorias
        WHERE
            nombre = 'Accion'
    );

-- Mostrar categorias con mas de 3 entradas
-- Mostrar los usuarios que crearon una entrada un martes
-- Mostrar nombre del usuario que tenga mas entradas
-- Mostras las categorias sin entradas