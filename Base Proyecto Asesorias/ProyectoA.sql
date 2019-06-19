create database Proyecto;
use Proyecto;

create table alumno(id_alumno int(10) primary key not null,
nombre varchar(45),
apellido varchar(45),
matricula varchar(45),
carrera varchar(45)
) engine = innodb;

select * from alumno;

create table asesor(id_asesor int(10) primary key not null,
nombre varchar(45),
apellido varchar(45)
) engine = innodb;

select * from asesor;

create table autentifiacion(id_usuario int(10) primary key not null,
nombre varchar(45),
contraseña varchar(45)
) engine = innodb;

select * from autentifiacion;

create table consulta(id_consulta int(10) primary key not null
) engine = innodb;
