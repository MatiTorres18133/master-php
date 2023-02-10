/*

6-Visualizar el nombre y apellido de los vendedores en una misma columna, su fecha de registro y el dia de la semana 
en la que se registraron.
*/


SELECT CONCAT(nombre," ", apellidos), fecha_alta AS 'Fecha de registro', DAYNAME(fecha_alta) AS "DIA" FROM vendedores;