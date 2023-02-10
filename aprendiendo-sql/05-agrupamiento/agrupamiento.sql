/*

CONSULTAS DE AGRUPAMIENTO
*/


/*AGRUPAR EN BASE A LA CATEGORIA*/
SELECT COUNT(titulo) FROM entradas GROUP BY categoria_id;

/*CONTAR TODAS LA CATEGORIAS AGRUPADAS POR CATEGORIA ID*/
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;


/***************CONDICION HAVING**************/


SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo)>=4;

/**************FUNCIONES DE AGRUPAMIENTO**************/
/*AVG: Sacar la media/ porcentaje 
COUNT: Contar el numero de elementos
MAX: Sacar el maximo valor del grupo
MIN: Sacar el minimo valor del grupo
SUM: Sumar todo el contenido del grupo
*/



SELECT AVG(id) AS 'Media de entradas' FROM entradas;

SELECT MAX(id) AS 'Usuario con el id mas grande', titulo FROM entradas;

SELECT MIN(id) AS 'Usuario con el id mas chico', titulo FROM entradas;

SELECT SUM(id) AS 'Usu', titulo FROM entradas;

