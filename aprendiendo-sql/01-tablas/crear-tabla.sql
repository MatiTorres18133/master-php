/*
CREAR UNA TABALA
*/
CREATE TABLE usuarios(
id int(11) ,
nombre varchar(100),
apellidos varchar(255), 
password varchar(255)
);


/*
CREAR UNA TABALA CON RESTRICCIONES DE INTEGRIDAD
*/
CREATE TABLE usuarios(
id int(11) not null auto_increment,  /*NO NULO - AUTOINCREMENTAL*/
nombre varchar(100) default'LORENA' /*CREAR LA COLUMNA CON UN VALOR POR DEFECTO */, 
apellidos varchar(255), 
password varchar(255) not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id) /*Definir la clave primaria*/
);





