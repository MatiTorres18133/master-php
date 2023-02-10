/*
VISTAS:
Las podemos definir ccomo una consulta alamacenada en la base de datos que se utiliza como tabla virtual.
No alamcena datos si no que utiliza asociaciones y los datos originales de las tablas.
*/
CREATE VIEW entradas_con_nombres AS 
SELECT c.nombre, COUNT(e.id) FROM entradas e LEFT JOIN categorias c  
 ON e.categoria_id = c.id GROUP BY e.categoria_id; 
