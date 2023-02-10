/*

APRENDIENDO DML: Lenguaje de manipulacion de datos

*/



/*INSERTAR DATOS*/
INSERT INTO usuarios VALUES(null,'Matias', 'Torres', 'matiasnicolastorres71@gmail.com','123456tt','01-05-2023');


/*INSERTAR FILAS SOLO CON  CIERTAS COLUMNAS */

INSERT INTO usuarios(email, password) VALUES('roberto@gmail.com', '123qqqssssda2');





CREATE TABLE usuarios (
    id int(10) auto_increment not null,
    nombre varchar(155) not null,
    apellidos varchar(155) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    fecha date,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE categorias(
    id int(10) auto_increment not null,
    nombre varchar(155) not null,
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE entradas (
    id int(10) auto_increment not null,
    usuario_id int(10),
    categoria_id int(10),
    titulo varchar(155) not null,
    descripcion varchar(255) not null,
    fecha date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT fk_entradas_usuarios FOREIGN KEY(usuario_id)REFERENCES usuarios(id),
    CONSTRAINT fk_entradas_categorias FOREIGN KEY(categoria_id)REFERENCES categorias(id)
)ENGINE=InnoDB;

