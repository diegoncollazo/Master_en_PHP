-- Agrupamiento
SELECT
    COUNT(titulo) AS 'Numero de entradas',
    categoria_id
FROM
    entradas
GROUP BY
    categoria_id;

-- Agrupamiento con condiciones
SELECT
    COUNT(titulo) AS 'Numero de entradas',
    categoria_id
FROM
    entradas
GROUP BY
    categoria_id
HAVING
    COUNT(titulo) >= 4;

-- Funciones 
SELECT
    AVG(id) AS 'Media id entradas'
FROM
    entradas;

SELECT
    MAX(id) AS 'Maximo id entradas',
    titulo
FROM
    entradas;

SELECT
    MIN(id) AS 'Minimo id entradas'
FROM
    entradas;

SELECT
    SUM(id) AS 'Suma id entradas'
FROM
    entradas;