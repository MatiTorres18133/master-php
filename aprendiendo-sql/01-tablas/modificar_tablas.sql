/*
MODIFICAR TABLAS
*/


/* RENOMBAR TABLA */

ALTER TABLE usuarios RENAME TO usuarios_renombrada;


/* CAMBIAR NOMBRE DE COLUMNA*/

ALTER TABLE usuarios_renombrada CHANGE nombre nombres varchar(100) not null;


/* MODIFICAR COLUMA SIN CAMBIAR NOMBRE*/
ALTER TABLE usuarios_renom MODIFY apellido char(50) not null;


/* AGREGAR COLUMNA*/
ALTER TABLE usuarios_renom ADD website varchar(150) not null;

/* AGREGAR RESTRICCION A COLUMNA*/
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email)/*NO DUPLICAR EMAIL*/; 


/* BORRAR COLUMNA */
ALTER TABLE usuarios_renom DROP  website ;



