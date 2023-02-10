/*
CONSULTA MULTITABLA:    
Son consultas que sirven para consultar varias tablas en una sola sentencia

*/


/*==========MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL AUTOR Y EL NOMBRE DE LA CATEGORIA*/

SELECT e.id, e.titulo, u.nombre, c.nombre AS 'Autor',  c.nombre AS 'Categoria' FROM entradas e, usuarios u, categorias c 
WHERE e.usuario_id =u.id AND e.categoria_id = c.id;


/*Mostrar el mail de los usuarios y al lado cuantas entradas tienen*/
SELECT u.email, COUNT(e.id)  FROM usuarios u , entradas e WHERE e.usuario_id = u.id GROUP BY e.usuario_id;


/*Mostrar el nombre de las categorias y al lado cuantas entradas tienen*/
SELECT c.nombre COUNT(e.id) FROM categorias c, entradas e WHERE e.categoria_id = c.id GROUP BY e.categoria_id;        







/*==============INER JOIN ===============*/

/*==========MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL AUTOR Y EL NOMBRE DE LA CATEGORIA*/


SELECT e.id, e.titulo, u.nombre AS 'Autor' FROM  entradas e INNER JOIN usuarios u  ON e.usuario_id = u.id; 



/*==============LEFT JOIN ===============*/

SELECT c.nombre, COUNT(e.id) FROM categorias c LEFT JOIN entradas e   ON e.categoria_id = c.id GROUP BY e.categoria_id; 

/*==============RIGTH JOIN ===============*/


SELECT c.nombre, COUNT(e.id) FROM entradas e LEFT JOIN categorias c   ON e.categoria_id = c.id GROUP BY e.categoria_id; 
