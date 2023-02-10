/*
CONSULTA CON UNA CONDICION:
*/
SELECT * FROM usuarios WHERE email = 'admin@admin.com';


 /*OPERADORES DE COMPARACION

 Entre          between A and B
 En             IN
 Es nulo        is null
 No nulo        is not null
 Como           like
 No es como     not like
 */


 /*COMODINES
 
 Cualquier cantidad de caracters: %
 Un caracter desconocido: _
 */

#EJEMPLOS#

/*Nombre y apellidos de todos los usuarios que se registraron en el 2019*/

SELECT nombre, apellido FROM usuarios WHERE YEAR(fecha) = 2019;  

/*Nombre y apellidos de todos los usuarios que NO se registraron en el 2019*/

SELECT nombre, apellido FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);  

/*Mostrar el email de los usuarios cuyo apellido contenga la letra A y que contra sea 1234*/
SELECT email FROM usuarios WHERE apellido LIKE '%a%'


