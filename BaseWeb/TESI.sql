drop database TESI;
create database TESI;
use TESI;

create table user(
    id int(20) auto_increment not null primary key ,
    tipo varchar(45)not null,
    nombre varchar(45) not null,
    apellido varchar(45) not null,
    pass int(20) not null,
    carrera varchar(45) not null
)engine = innodb;

create table alumnos(
    id int(20) auto_increment not null primary key, 
    tipo varchar(45) not null,
    index (tipo),
    foreign KEY (id) references user(id),
    info_tutor longblob,
    bitacora longblob,
    pat longblob,
    solicitud_canalizacion longblob,
    r_mensual longblob,
    r_semestral longblob,
    r_general longblob
)engine = innodb;

describe user;

describe alumnos;

select * from user;