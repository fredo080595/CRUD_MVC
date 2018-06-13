create database crud;

	use crud;

	create table persona(
		id int auto_increment not null,
		nombre varchar(30),
		apellido varchar(30),
		edad int,

		primary key(id)

		);