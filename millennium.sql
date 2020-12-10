create database millennium;
use millennium;
create table usuarios(
				id int auto_increment,
                nombre varchar(50),
                apellido varchar(50),
                primary key(id)
					);
Select * from usuarios;
drop table usuarios;