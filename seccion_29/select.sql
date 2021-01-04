-- Mostrar todos los registros / filas de una tabla
SELECT email, nombre, apellido FROM usuarios;

-- Mostrar todos los campos
SELECT * FROM usuarios;

-- Operadores aritmeticos
SELECT email, (7+7) AS 'Suma' FROM usuarios;
SELECT email, (7-7) AS 'Suma' FROM usuarios;
SELECT email, (7*7) AS 'Suma' FROM usuarios;
SELECT email, (7/7) AS 'Suma' FROM usuarios;
SELECT id, email, (7%7) AS 'Suma' FROM usuarios ORDER BY id DESC;
SELECT id, email, (7%7) AS 'Suma' FROM usuarios ORDER BY id ASC;

-- Operadores con texto
SELECT CONCAT(nombre, ' ', apellido) AS CONVERSION FROM usuarios
SELECT UPPER(CONCAT(nombre, ' ', apellido)) AS CONVERSION FROM usuarios
SELECT LENGTH(CONCAT(nombre, ' ', apellido)) AS CONVERSION FROM usuarios
SELECT TRIM(CONCAT('    ', nombre, ' ', apellido, '    ')) AS CONVERSION FROM usuarios

-- Operadores con fechas
SELECT email, fecha, CURDATE() AS 'Fecha actual' FROM usuarios
SELECT DATEDIFF(CURDATE(), fecha) AS 'Diferencia de días' FROM usuarios
SELECT email, DAYNAME(fecha) AS 'Día de la semana' FROM usuarios
SELECT email, DAYOFMONTH(fecha) AS 'Día del mes' FROM usuarios
SELECT email, DAYOFWEEK(fecha) AS 'Día de la semana' FROM usuarios
SELECT email, DAYOFYEAR(fecha) AS 'Día del año' FROM usuarios
SELECT email, DAY(fecha) AS 'Día del año' FROM usuarios
SELECT email, MONTH(fecha) AS 'Día del año' FROM usuarios
SELECT email, YEAR(fecha) AS 'Día del año' FROM usuarios
SELECT email, HOUR(fecha) AS 'Día del año' FROM usuarios
SELECT email, CURTIME() AS 'Hora actual' FROM usuarios
SELECT email, SYSDATE() AS 'Hora del sistema' FROM usuarios
SELECT email, DATE_FORMAT(fecha, '%d/%m/%Y') AS 'Fecha formateada' FROM usuarios

-- Funciones generales
SELECT email, ISNULL(apellido) FROM usuarios
SELECT email, STRCMP('Hola', 'Hola') FROM usuarios
SELECT VERSION() FROM usuarios
SELECT DISTINCT DATABASE() FROM usuarios
SELECT IFNULL(apellido, 'Zaraza') FROM usuarios