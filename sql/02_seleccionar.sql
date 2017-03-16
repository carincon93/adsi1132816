#Seleccionar todos los registros
SELECT * FROM nombretabla;

#Seleccionar una columna de la tabla
SELECT nombrecolumna FROM nombretabla;

#Seleccionar varias columnas de la tabla
SELECT nombrecolumna1, nombrecolumna2 FROM nombretabla;

#Seleccionar valores distintos de una columna
SELECT DISTINCT nombrecolumna FROM nombretabla;

#Seleccionar registros con condición
SELECT * FROM nombretabla WHERE nombrecolumna = valor;

#Seleccionar varios registros
SELECT * FROM nombretabla WHERE nombrecolumna in (valor1, valor2);

#Seleccionar registros mayores o menores a un valor de un campo
SELECT * FROM nombretabla WHERE nombrecolumna > valor;
SELECT * FROM nombretabla WHERE nombrecolumna < valor;

#Seleccionar todos menos un registro
SELECT * FROM nombretabla WHERE nombrecolumna <> valor;

#Seleccionar un registro con AND
SELECT * FROM nombretabla WHERE nombrecolumna = valor1 AND nombrecolumna > valor2;

#Seleccionar varios registros con OR
SELECT * FROM nombretabla WHERE nombrecolumna = valor1 OR nombrecolumna > valor2;

#Seleccionar varios registros con AND - OR
SELECT * FROM nombretabla WHERE nombrecolumna1 = valor1 AND nombrecolumna1 = valor2 OR nombrecolumna2 = valor3 AND nombrecolumna2 = valor4;

#Ordenar
SELECT * FROM nombretabla ORDER BY nombrecolumna ASC;
SELECT * FROM nombretabla ORDER BY nombrecolumna DESC;

#Límite de registros
SELECT * FROM nombretabla LIMIT numero;

#Paginación de registros
SELECT * FROM nombretabla LIMIT numeroregistros OFFSET numeroinicia;

#Buscar registros (LIKE)
SELECT * FROM nombretabla WHERE nombrecolumna LIKE "%cadena%";

#Buscar al inicio
SELECT * FROM nombretabla WHERE nombrecolumna LIKE "$cadena";

#Buscar - Completando caracteres
SELECT * FROM nombretabla WHERE nombrecolumna LIKE	"c_d_n";

#Buscar (Negación)
SELECT * FROM nombretabla WHERE nombrecolumna NOT LIKE	"%cadena%";

#Múltiples valores en una columna (IN)
SELECT * FROM nombretabla WHERE nombrecolumna IN(valor1, valor2, valor3);

#Entre (Inicial - Final) (BETWEEN)
SELECT * FROM nombretabla WHERE nombrecolumna BETWEEN valor1 AND valor2;

#Entre (Negación)
SELECT * FROM nombretabla WHERE nombrecolumna NOT BETWEEN valor1 AND valor2;

#Alias (2 Tablas Relacionadas)
SELECT alias1.nombrecolumna, alias2.nombrecolumna FROM nombretabla1 AS alias1, nombretabla2 AS alias2 WHERE alias2.nombrecolumna = alias1.nombrecolumna AND alias2.nombrecolumna = alias1.nombrecolumna;

#INNER JOIN
SELECT alias1.nombrecolumna, alias2.nombrecolumna FROM nombretabla AS alias1 INNER JOIN nombretabla2 AS alias2 ON alias2.nombrecolumna = alias1.nombrecolumna;

#LEFT JOIN
SELECT alias1.nombrecolumna, alias2.nombrecolumna FROM nombretabla AS alias1 LEFT JOIN nombretabla2 AS alias2 ON alias2.nombrecolumna = alias1.nombrecolumna;

#RIGHT JOIN
SELECT alias1.nombrecolumna, alias2.nombrecolumna FROM nombretabla AS alias1 RIGHT JOIN nombretabla2 AS alias2 ON alias2.nombrecolumna = alias1.nombrecolumna;

#UNION (Unir la consulta de 2 o más tablas)
SELECT nombrecolumna1 FROM nombretabla1 UNION SELECT nombrecolumna2 FROM nombretabla2;




