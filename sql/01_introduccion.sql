#Iniciar línea de comandos de MySQL
cd \xampp\mysql\bin

#Ejecutar comando
mysql.exe -u root -p

#Ver las bases de datos
show databases;

#Crear base de datos
create database nombrebasededatos;

#Usar una base de datos
use nombrebasededatos;

#Conectarme a una base datos
connect nombrebasededatos;

#Ver las tablas
show tables;

#Crear tabla
CREATE TABLE clientes (
    -> id int auto_increment,
    -> documento bigint not null,
    -> nombres varchar(32) not null,
    -> telefono bigint null,
    -> direccion varchar(32) null,
    -> primary key(id));

#Mostrar estructura de la tabla
describe nombretabla;

#Insertar datos en la tabla
INSERT INTO clientes VALUES (
    -> default, 75000001, 'Jeremias Springfield',
    -> 8800011, 'Calle 100 con 23');

