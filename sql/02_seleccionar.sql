#Seleccionar todos los registros
SELECT * FROM nombretabla;

#Seleccionar una columna de la tabla
SELECT nombrecolumna FROM nombretabla;

#Seleccionar varias columnas de la tabla
SELECT nombrecolumna1, nombrecolumna2 FROM nombretabla;

#Seleccionar valores distintos de una columna
SELECT distinct nombrecolumna FROM nombretabla;

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
