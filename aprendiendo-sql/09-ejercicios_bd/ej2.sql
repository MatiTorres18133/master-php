/*
2- Modificar la comision de los vendedores y ponerla al 2% cuando ganan mas de 50.000 
*/


UPDATE vendedores SET COMISION = 2 WHERE sueldo >= 50000;