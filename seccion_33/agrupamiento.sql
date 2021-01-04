SELECT
    COUNT(titulo) AS 'Numero de entradas',
    categoria_id
FROM
    entradas
GROUP BY
    categoria_id;