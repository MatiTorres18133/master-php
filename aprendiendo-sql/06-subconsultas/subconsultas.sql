/*
SUBCONSULTAS:
- Son consultas que se ejecutan dentro de otras.
-Consisten en utilizar los resultados de la subconsulta para operar en la consulta principal
*/




/*SELECCIONAR TODOS LOS USUARIOS LOS CUALES EXISTAN EN LA TABLA ENTRADAS*/
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

/*SELECCIONAR TODOS LOS USUARIOS LOS CUALES  NO EXISTAN EN LA TABLA ENTRADAS*/
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);


/*Seleccionar los usuarios que tengan alguna entrada que en su titulo hable de GTA*/
SELECT nombre, apellidos FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%" );




/*Sacar todas las entradas de la categoria ACCION utilizando su nombre*/
SELECT titulo FROM entradas WHERE categoria_id  IN (SELECT id FROM categorias WHERE nombre = 'Accion');


/*Mostrar las categorias con mas de 3 entradas*/

SELECT nombre FROM categorias WHERE id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=2 );



s

/*Mostrar los usuarios que crearon una entrada un vieres*/

SELECT * FROM usuarios WHERE id IN (SELECT usuarios_id FROM entradas WHERE DAYOFWEEK(fecha)=6);



/*Mostrar el nombre de el usuario que tenga mas entradas*/

SELECT CONCAT(nombre,' ',apellidos)AS 'El usuario con mas entradas'from usuarios 
WHERE id = (SELECT COUNT(id)  FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);



/*Mostrar las categorias sin entradas*/
SELECT * FROM categorias WHERE id 
NOT IN(SELECT categoria_id FROM entradas)





