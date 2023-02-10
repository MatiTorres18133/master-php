/*

SELECT EN SQL


*/


/*MOSTRAR email, nombre y apellidos DE LA TABLA USUARIOS*/
SELECT email, nombre, apellidos FROM usuarios;


/*MOSTRAR TODOS LOS REGISTROS DE LA TABLA USUARIOS*/

SELECT * FROM usuarios;


/*OPERADORES ARITMETICOS*/
SELECT email, (4+7) AS 'OPERACION' FROM usuarios;

SELECT email, (id+7) AS 'OPERACION' FROM usuarios;



/*FUNCIONES MATEMATICAS*/

        /*VALOR ABSOLUTO*/
        SELECT abs(7)AS 'OPERACION' FROM usuarios;
        /*REDONDEAR NUMERO*/
        SELECT CEIL(7) AS 'OPERACION' FROM usuarios;
        /*SACAR UN NUMERO ALEATORIO*/
        SELECT RAND() AS 'OPERACION' FROM usuarios;
        /*REDONDEAR UN NUMERO ALEATORIO*/
        SELECT ROUND() AS 'OPERACION' FROM usuarios;
        /*RAIZ CUADRADA*/
        SELECT SQRT() AS 'OPERACION' FROM usuarios;










