#Insertar forma corta
INSERT INTO nombre_tabla VALUES (DEFAULT, valor1, valor2);

#Insertar forma larga
INSERT INTO nombre_tabla (nombrecolumna1, nombrecolumna2) VALUES (valor1, valor2);

#Backup (Insertar una tabla en una nueva tabla)
INSERT INTO nombre_tablacopia SELECT * FROM nombre_tablavieja;

#Backup (Insertar una tabla en una nueva tabla en otra base de datos)
INSERT INTO nombre_basedatosnueva.nombre_tablanueva SELECT * FROM nombre_basedatosvieja.nombre_tablavieja;