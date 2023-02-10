

/*
CONCATENAR TEXTO
*/

SELECT CONCAT(nombre," ", apellido)FROM usuarios;

/*
LIMPIAR ESPACIOS DE DERECHA E IZQUIERDA DE CUALQUIER CADENA DE TEXTO
*/
SELECT TRIM(CONCAT("            "nombre," ",apellido,"         ")) AS 'CONVERSION' FROM usuarios;





/*==============================FUNCIONES DE FECHA =================================*/



/*SELECCIONAR LA FECHA ACTUAL*/
SELECT CURDATE() AS 'Fecha Actual' FROM usuarios;




/*DIFERENCIA ENTRE UNA FECHA Y OTRA*/
SELECT DATEDIF(fecha , CURDATE()) AS 'Fecha Actual ' FROM usuarios;


/*SACAR EL NOMBRE DEL DIA*/
SELECT email , DAYNAME(fecha) AS "DIA" FROM usuarios;


/*SACAR EL DIA DEL MES*/
SELECT email , DAYOFMONTH(fecha) AS "DIA DEL MES" FROM usuarios;

/*SACAR MES*/

SELECT email , MONTH(fecha) AS "DIA DEL MES" FROM usuarios;


/*SACAR AÑO*/
SELECT email , MONTH(fecha) AS "DIA DEL AÑO" FROM usuarios;









