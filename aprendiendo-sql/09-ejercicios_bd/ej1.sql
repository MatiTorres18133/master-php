/*

1-CREAR LA BASE DE DATOS DE UN CONCESIONARIO.

*/



CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;


CREATE TABLE coches(
id int(10) auto_increment not null,
modelo varchar(100)not null,
marca varchar(100),
precio int(20) not null,
stock int(255) not null,
CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;




CREATE TABLE grupos_vendedores(
    id int(10) auto_increment not null,
    nombre varchar(100) not null,
    ciudad varchar(100) not null,
    CONSTRAINT pk_grupos_vendedores PRIMARY KEY(id)

)ENGINE=InnoDB;
    

CREATE TABLE vendedores(
    id int(10) auto_increment not null,
    grupo_id int(10) not null,
    jefe int(10),
    nombre varchar(100) not null,
    apellidos varchar(150),
    cargo varchar (50),
    fecha_alta date,
    sueldo int(20),
    comision float(10),
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos_vendedores(id),
    CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes (

    id int(10) auto_increment not null,
    vendedor_id int(10),
    nombre varchar(150) not null,
    ciudad varchar(100),
    gastado float(50),
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_clientes_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;


CREATE TABLE encargos(
id int(10) auto_increment not null,
coche_id int(10) not null,
cliente_id int(10) not null,
cantidad int(100) ,
fecha date ,
CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT fk_encargo_coches FOREIGN KEY(coche_id) REFERENCES coches(id),
CONSTRAINT fk_encargo_clientes FOREIGN KEY(cliente_id) REFERENCES clientes(id)
)ENGINE=InnoDB;



/*====================RELLENAR LAS TABLAS CON INSERTS========================*/


/*COCHES*/
INSERT INTO coches VALUES(null, 'FORD MUSTANG' , 'FORD', 12000, 13);
INSERT INTO coches VALUES(null, 'SEAT PANDA ' , 'SEAT', 10000, 7);
INSERT INTO coches VALUES(null, 'MERCEDES RANCHERA' , 'MERCEDES', 15000, 10);
INSERT INTO coches VALUES(null, 'LAMBO AVENTADOR' , 'LAMBORGHINI', 12000, 13);


/*GRUPOS*/

INSERT INTO grupos_vendedores VALUES(null, 'Vendedores A' , 'Neuquen');
INSERT INTO grupos_vendedores VALUES(null, 'Vendedores B ' , 'Cipoletti');


/*VENDEDORES*/
INSERT INTO vendedores VALUES(null, 1, null, 'Matias', 'Torres',  'Responsable de tienda', CURDATE(), 200000, 4);
INSERT INTO vendedores VALUES(null, 2, null, 'Fausto', 'Pino',    'Mecanico jefe', CURDATE(), 120000, 4);
INSERT INTO vendedores VALUES(null, 2, 3,     'Matias', 'Torres',     'Ayudante de tienda', CURDATE(), 300000, 4);
INSERT INTO vendedores VALUES(null, 1, 2, 'Matias', 'Torres',  'Ayudante de mecanica', CURDATE(), 210000, 4);
INSERT INTO vendedores VALUES(null, 2, null, 'Matias', 'Torres',  'Programador', CURDATE(), 300000, 4);

/*CLIENTES*/

INSERT INTO clientes VALUES(null, 5, 'Matias', 'Neuquen',   5000000 );
INSERT INTO clientes VALUES(null, 3, 'Matias', 'Senillosa',    2300000 );
INSERT INTO clientes VALUES(null, 2, 'Matias', 'Las grutas',   15300000 );
INSERT INTO clientes VALUES(null, 1, 'Matias', 'San Antonio',   56300000 );

/*ENCARGOS*/
INSERT INTO encargos VALUES(null, 3, 3, 5,CURDATE());
INSERT INTO encargos VALUES(null, 4,2, 6,CURDATE());
INSERT INTO encargos VALUES(null, 2, 1,10, CURDATE());
INSERT INTO encargos VALUES(null, 2, 1,10, CURDATE());
INSERT INTO encargos VALUES(null, 2, 1,10, CURDATE());





/* CONSULTAR LA CANTIDAD DE AUTOS POR CLIENTES y el nombre del cliente*/

SELECT c.nombre AS 'Cliente', COUNT(e.id)AS 'Cantidad de autos' FROM clientes c INNER JOIN encargos e ON c.id = e.cliente_id GROUP BY e.cliente_id;