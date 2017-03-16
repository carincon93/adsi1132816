#Crear tabla
CREATE TABLE nombretabla (
	nombrecolumna tipo(longitud) restricción,
	#nombre varchar(32) not null
)
#Eliminar tabla
DROP TABLE nombretabla

#Eliminar base de datos
DROP DATABASE nombrebasedatos

#Vaciar datos de una tabla
TRUNCATE TABLE nombretabla

#Restricciones -> Constraints
#NOT NULL
CREATE TABLE nombretabla (
	nombre varchar(32) NOT NULL
)

#UNIQUE
CREATE TABLE nombretabla (
	email varchar(32) UNIQUE
)

#PRIMARY KEY
CREATE TABLE nombretabla (
	id int AUTO_INCREMENT,
	PRIMARY KEY (id)
)

#Alterar la tabla (PRIMARY KEY)
ALTER TABLE nombretabla ADD PRIMARY KEY(campo)

#Alterar la tabla (Eliminar PRIMARY KEY)
ALTER TABLE nombretabla DROP PRIMARY KEY

#FOREIGN KEY
CREATE TABLE nombretabla (
	nombretabla_singular_id int,
	FOREIGN KEY (nombretabla_singular_id) 
	REFERENCES tablaprincipal.campollaveprimaria
)
#Alterar la tabla (FOREIGN KEY)
ALTER TABLE nombretabla ADD FOREIGN KEY(nombretabla_singular_id) REFERENCES tablaprincipal.campollaveprimaria

#Alterar la tabla (Eliminar FOREIGN KEY)
ALTER TABLE nombretabla DROP FOREIGN KEY(nombretabla_singular_id)

#CHECK
CREATE TABLE nombretabla (
	edad int,
	CHECK (edad >= 18)
)

#Alterar la tabla (CHECK)
ALTER TABLE nombretabla ADD CHECK (valor)

#Alterar la tabla (Eliminar CHECK)
ALTER TABLE nombretabla DROP CHECK (valor)

#DEFAULT
CREATE TABLE nombretabla (
	ciudad varchar(32) DEFAULT 'Manizales'
)

#Alterar la tabla (DEFAULT)
ALTER TABLE nombretabla ALTER nombrecolumna SET DEFAULT 'valor'

#Alterar la tabla (Eliminar DEFAULT)
ALTER TABLE nombretabla DROP DEFAULT 'valor'

#-Crear un indice
CREATE INDEX nombreindice ON nombretabla(nombrecolumna)

#Eliminar indice
DROP INDEX nombretabla.nombreindice

#Alterar una tabla (campo(columna))
ALTER TABLE 

#Eliminar una columna de la tabla
ALTER TABLE nombretabla DROP COLUMN nombrecolumna;

#Cambiar nombre de una comlumna
ALTER TABLE nombretabla RENAME nombrecolumnanuevo;

#Auto incremento
CREATE TABLE nombretabla (
	id int AUTO_INCREMENT
)

#Definir donde inicia el incremento
ALTER TABLE nombretabla AUTO_INCREMENT = 1000

#Crear vista entre 3 tablas
CREATE VIEW nombretabla
AS SELECT alias1.nombretabla1 as alias 1, alias2.nombretabla2 as alias2,
alias2.nombrecolumna
FROM nombretabla1 AS alias1
JOIN nombretabla3 AS alias3
ON alias3.nombrecolumna_id = alias1.nombrecolumna_id
JOIN nombretabla2 AS alias2
ON alias3.nombrecolumna_id = alias2.nombrecolumna_id

#Consultar una vista
SELECT * FROM nombrevista

#Eliminar la vista
DROP VIEW nombrevista

#UNION
SELECT nombrecolumna1, nombrecolumna2 FROM nombretabla1
UNION
SELECT nombrecolumna1, nombrecolumna1 FROM nombretabla2

#Máximo
SELECT max(nombrecolumna) FROM nombretabla
#Contar
SELECT count(nombrecolumna) FROM nombretabla
#Sumar
SELECT sum(nombrecolumna) FROM nombretabla
#Promedio
SELECT avg(nombrecolumna) FROM nombretabla
#Redondear
SELECT round(avg(nombrecolumna)) FROM nombretabla



