-- Consulta con una condicion
SELECT
    *
FROM
    usuarios
WHERE
    email = 'luciacollazo@gmail.com';

-- Operadores de comparacion
/*
 Igual       =
 Distinto    !=
 Menor       <
 Mayor       >
 Menor Igual =<
 Mayor Igual =>
 Entre       between A and B
 En          IN
 Es nulo     is null
 No es nulo  is not null
 Como        like
 */
-- Operadores logicos
/*
 O       OR
 Y       AND
 No      NOT
 */
-- Comodines
/*
 %
 _
 */
SELECT
    nombre,
    apellido
FROM
    usuarios
WHERE
    YEAR(fecha) = 2019;

SELECT
    nombre,
    apellido
FROM
    usuarios
WHERE
    YEAR(fecha) != 2019;

SELECT
    nombre,
    apellido
FROM
    usuarios
WHERE
    YEAR(fecha) != 2019
    or ISNULL(fecha);

SELECT
    email
FROM
    usuarios
WHERE
    apellido LIKE '%coll%'
    AND password = 'zaq1XSW"';

-- Clase 121
SELECT
    *
FROM
    usuarios
WHERE
    (YEAR(fecha) % 2 != 0);

SELECT
    UPPER(nombre) AS 'Nombre',
    apellido
FROM
    usuarios
WHERE
    LENGTH(nombre) > 5
    AND YEAR(fecha) < 2020;

-- Clase 122
SELECT
    *
FROM
    usuarios
ORDER BY
    id DESC;

SELECT
    *
FROM
    usuarios
ORDER BY
    fecha ASC;

SELECT
    *
FROM
    usuarios
ORDER BY
    fecha ASC
LIMIT
    1;

SELECT
    *
FROM
    usuarios
ORDER BY
    fecha ASC
LIMIT
    0, 2;