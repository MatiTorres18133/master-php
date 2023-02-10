/*
5- Listar todos los vendedores y mostrar su nombre y los dias que lleva trabajando en el concesionario
*/



SELECT nombre, DATEDIFF(CURDATE(),fecha_alta ) AS 'Dias que lleva trabajando' FROM vendedores; 
