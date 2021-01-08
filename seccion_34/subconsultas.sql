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
    categoria_id,
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
SELECT
    id,
    nombre
FROM
    categorias
WHERE
    id IN (
        SELECT
            categoria_id
        FROM
            entradas
        GROUP BY
            categoria_id
        HAVING
            COUNT(categoria_id) >= 3
    );

-- Mostrar los usuarios que crearon una entrada un martes 
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
        WHERE
            DAYOFWEEK(fecha) = 2
    );

-- Mostrar nombre del usuario que tenga mas entradas
SELECT
    CONCAT(nombre, ' ', apellido) AS 'Mas entradas'
FROM
    usuarios
WHERE
    id =(
        SELECT
            usuario_id
        FROM
            entradas
        GROUP BY
            usuario_id
        ORDER BY
            COUNT(id) DESC
        LIMIT
            1
    );

SELECT
    COUNT(id),
    usuario_id
FROM
    entradas
GROUP BY
    usuario_id;

-- Mostras las categorias sin entradas
SELECT
    *
FROM
    categorias
WHERE
    id NOT IN (
        SELECT
            categoria_id
        FROM
            entradas
    );