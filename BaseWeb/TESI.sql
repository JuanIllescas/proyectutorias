drop database tutorias;
create database tutorias;
use tutorias;
// pantalla de carreras  
/*  carreras
    1.- Administracion
        1.1.-
    2.- Ambiental
        2.1.-
    3.- Arquitectura
        3.1.-
    4.- Biomedica
        4.1.-
    5.- Electronica
        5.1.-
    6.- Informatica
        6.1.-
    7.- Sistemas Computacionales
        7.1.- Diana
*/

create table carrera(
    id_carrera int(11)not null primary key,
    nombre_c varchar(45)not null,
    nombecompleto_j varchar(45)not null
)engine = innodb;

insert into carrera(id_carrera, nombre_c, nombecompleto_j) values
(1,'Administracio','Juan'),
(2,'Ambiental','Alberto'),
(3,'Arquitectura','Andres'),
(4,'Biomedica','Francisca'),
(5,'Electronica','Estefani'),
(6,'Informatica','Roberto'),
(7,'Sistemas Computacionales','Diana');


/*  tipos
    1.- alumno
    2.- profesores
    3.- jefes de division
*/

create table alumno(
    id_alu int(11)primary key not null auto_increment,
    nombre_u varchar(45)not null,
    apellidos_a varchar(45)not null,
    años int(3) not null,
    id_carrera int(11)not null,
    index (id_carrera),
    foreign key (id_carrera) references carrera(id_carrera),
    semestre int(15)not null,
    email varchar(45)not null,
    matricula int(20)not null,
    contraseña varchar(45)not null
)engine = innodb;

INSERT INTO alumno(id_alu, nombre_u, apellidos_a, años, id_carrera, semestre, email, matricula, contraseña) VALUES
(1,'Erick','Aja',23,7,6,'aguila95style@gmail.com',201633465,'132456');

INSERT INTO alumno(nombre_u, apellidos_a, años, id_carrera, semestre, email, matricula, contraseña) VALUES
('Daniel','Alvarez',20,1,4,'algo@gmail.com',123456,'123123'),
('Marco','Antonio',21,2,4,'algo2@gmail.com',123321,'1111111'),
('Paola','Rasco',23,4,6,'algo3@gmail.com',321654,'324651');

create table profesore(
    id_pro int(20) auto_increment not null  primary key,
    nombre_p varchar(45)not null,
    apellidos_p varchar(45)not null,
    contraseña varchar(45)not null
)engine = innodb;

insert into profesore(id_pro, nombre_p, apellidos_p, contraseña) VALUES
(1,'daniel','rosas','asdasd');

insert into profesore(nombre_p, apellidos_p, contraseña) VALUES
('karla','sanchuez','asdasd'),
('debora','chavez','asd52'),
('pedro','ordoñez','asda4s5');

/*  Documentos
    1.- Ficha de Identificacion del Tutorado
    2.- Bitacora de Tutorias Academicas
    3.- PAT
    4.- Canalizacion de Atencion Psicopedagogica
    5.- Reporte Mensual Tutorias
    6.- Reporte Semestral de Tutorias
    7.- Estadistica General de Turorias
*/

create table documento(
    id_doc int(20)auto_increment not null  primary key,
    nomb_d varchar(45)not null
)engine = innodb;

create table f_i_t( /* alumno  Doc#1*/
    /*----llave foranea---------*/
    id_doc int(20) not null,
    index (id_doc),
    foreign key (id_doc) references documento(id_doc),
    id_alu int(20)not null,
    index (id_doc),
    foreign key (id_doc) references alumno(id_alu),
    /*--------------------------*/
    ed_p1 varchar(20) not null,
    ed_p2 varchar(20) not null,
    ed_p3 varchar(20) not null,
    ed_p4 varchar(20) not null,
    ed_p5 varchar(20) not null,
    ed_p6 varchar(20) not null,
    ed_p7 varchar(20) not null,
    ed_p8 varchar(20) not null,
    ed_p9 varchar(20) not null,
    ed_p10 varchar(20) not null,
    ed_p11 varchar(20) not null,
    ai_af1 varchar(50) not null,
    ai_af2 varchar(50) not null,
    ai_af3 varchar(50) not null,
    ai_af4 varchar(50) not null,
    ai_af5 varchar(50) not null,
    ai_af6 varchar(50) not null,
    ai_af7 varchar(50) not null,
    ai_af8 varchar(50) not null,
    ai_af9 varchar(50) not null,
    ai_af10 varchar(50) not null,
    ai_af11 varchar(50) not null,
    ai_as1 varchar(50) not null,
    ai_as2 varchar(50) not null,
    ai_as3 varchar(50) not null,
    ai_as4 varchar(50) not null,
    ai_as5 varchar(50) not null,
    ai_as6 varchar(50) not null,
    ai_as7 varchar(50) not null,
    ai_as8 varchar(50) not null,
    cp_p1 varchar(20) not null,
    cp_p2 varchar(20) not null,
    cp_p3 varchar(20) not null,
    cp_p4 varchar(20) not null,
    cp_p5 varchar(20) not null,
    cp_p6 varchar(20) not null,
    cp_p7 varchar(20) not null,
    cp_p8 varchar(20) not null,
    cp_p9 varchar(20) not null,
    cp_p10 varchar(20) not null,
    cp_p11 varchar(20) not null,
    cp_p12 varchar(20) not null,
    cp_p13 varchar(20) not null,
    cp_p14 varchar(20) not null,
    cp_p15 varchar(20) not null,
    cp_p16 varchar(20) not null,
    cp_p17 varchar(20) not null,
    cp_p18 varchar(20) not null,
    cp_p19 varchar(20) not null,
    cp_p20 varchar(20) not null,
    cp_p21 varchar(20) not null,
    cp_p22 varchar(20) not null,
    cp_p23 varchar(20) not null,
    cp_p24 varchar(20) not null,
    cp_p25 varchar(20) not null,
    ap_p1 varchar(50) not null,
    ap_p2 varchar(50) not null,
    ap_p3 varchar(50) not null,
    ap_p4 varchar(50) not null,
    ap_p5 varchar(50) not null,
    ap_p6 varchar(50) not null,
    ap_p7 varchar(50) not null,
    ap_p8 varchar(50) not null,
    ap_p9 varchar(50) not null,
    ap_p10 varchar(50) not null,
    ap_p11 varchar(50) not null,
    ovyc_p1 varchar(50) not null,
    ovyc_p2 varchar(50) not null,
    cp2_p1 varchar(50) not null,
    cp2_p2 varchar(50) not null,
    cp2_p3 varchar(50) not null,
    cp2_p4 varchar(50) not null,
    cp2_p5 varchar(50) not null
)engine = innodb;

create table b_t_a( /* tutor Doc#2*/
    id_doc int(20) not null,
    index (id_doc),
    foreign key (id_doc) references documento(id_doc), /*documentos*/
    periodo varchar(50) not null,
    id_pro int(20)not null,
    index (id_pro),
    foreign key (id_pro) references profesore(id_pro), /*profesor*/
    fecha date not null,
    id_alu int(11) not null,
    index (id_alu),
    foreign key (id_alu) references alumno(id_alu),
    grupo int(11) not null,
    problema varchar(20) not null,
    analisis varchar(100) not null,
    area varchar(50) not null,
    firma varchar(5) not null
)engine = innodb;

create table pat( /* tutor  Doc#3*/
    id_doc int(20) not null,
    index (id_doc),
    foreign key (id_doc) references documento(id_doc),
    id_pro int(11)not null,
    index (id_pro),
    foreign key (id_pro) references profesore(id_pro),
    periodo varchar(50)not null,
    grupo int(10) not null,
    m_grupo int(10) not null,
    semestre int(5) not null,
    pro_ide varchar(100) not null,
    obejtivo varchar(100) not null,
    acciones varchar(100) not null,
    act_1 varchar(50),
    sep date,
    act_2 varchar(50),
    oct date,
    act_3 varchar(50),
    nov date,
    act_4 varchar(50),
    dic date,
    act_5 varchar(50),
    ene date,
    eva_f varchar(100) not null
)engine = innodb;

create table c_a_p( /* tutor Doc#4*/
    id_doc int(20) not null,
    index (id_doc),
    foreign key (id_doc) references documento(id_doc)
)engine = innodb;

create table r_m_t( /*tutor Doc#5*/
    id_doc int(20) not null,
    index (id_doc),
    foreign key (id_doc) references documento(id_doc),
    id_pro int(11)not null,
    index (id_pro),
    foreign key (id_pro) references profesore(id_pro),
    id_carrera int(11),
    index (id_carrera),
    foreign key (id_carrera) references carrera(id_carrera),
    semestre int(3) not null,
    fecha date not null,
    problemas varchar(100)not null,
    firma varchar(5)
)engine = innodb;

/*
create table r_s_t( tutor Doc#6
    id_doc int(20) not null,
    index (id_doc),
    foreign key (id_doc) references documento(id_doc),
    id_pro int(11)not null,
    index (id_pro),
    foreign key (id_pro) references profesores(id_pro),
    preiodo varchar(20)not null,
    id_carrera int(11)not null,
    index (id_carrera),
    foreign key (id_carrera) references carrera(id_carrera),
    grupo int(10)not null,
    semestre int(3)not null
)engine = innodb;

create table alu_aten(
    n_alum int(11)not null,
    id_alu int(11)not null,
    index (id_alu),
    foreign key (id_alu) references alumnos(id_alu),
    forma_atencion int(3)
)engine = innodb; */