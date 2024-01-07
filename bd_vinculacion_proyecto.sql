CREATE DATABASE VinculacionProyecto;
USE VinculacionProyecto;

CREATE TABLE TipoExpositor(
idTipoExpositor int PRIMARY KEY AUTO_INCREMENT,
tipoExpositor varchar (15),
descripcion varchar (50)
);

CREATE TABLE TipoEvento (
idTipoEvento int PRIMARY KEY AUTO_INCREMENT,
tipoEvento varchar (25),
descripcion varchar (50)
);

CREATE TABLE Evento (
idEvento int PRIMARY KEY AUTO_INCREMENT,
titulo varchar (50),
descripcion varchar (100),
capacidadMaximaPersonas varchar (10),
idTipoEvento2 int,
foreign key (idTipoEvento2) references TipoEvento (idTipoEvento)
);

CREATE TABLE HorarioEvento (
idHorario int PRIMARY KEY AUTO_INCREMENT,
fechaInicio varchar(10),
horaInicio varchar(5),
fechaFinal varchar(10),
horaFinal varchar(5),
duracion varchar (10),
idEvento3 int,
foreign key (idEvento3) references Evento (idEvento)
);

CREATE TABLE TipoEquipo(
idTipoEquipo int PRIMARY KEY AUTO_INCREMENT,
equipo varchar (30),
tipo varchar (30),
CantidadExistente varchar (5)
);

INSERT INTO tipoequipo (equipo, tipo, CantidadExistente) VALUES ('estantes', 'normal', '100'),
('gabinete', 'normal', '100'),
('mesas', 'normal', '200'),
('microfonos', 'normal', '15'),
('proyector', 'dlp', '20'),
('proyector', 'lcv', '20'),
('proyector', 'led', '20'),
('sillas', 'normal', '200'),
('sonido', 'altavoces activos', '25'),
('sonido', 'altavoces bluetooth', '25');

CREATE TABLE EquipoRequerido (
idEquipoRequerido int PRIMARY KEY AUTO_INCREMENT,
cantidad varchar (5),
idTipoEquipo1 int,
foreign key (idTipoEquipo1) references TipoEquipo (idTipoEquipo)
);

CREATE TABLE EquipoReq0Evento (
idEvento1 int,
idEquipoRequerido1 int,
foreign key (idEvento1) references Evento (idEvento),
foreign key (idEquipoRequerido1) references EquipoRequerido (idEquipoRequerido)
);

CREATE TABLE Origen (
idOrigen int PRIMARY KEY AUTO_INCREMENT,
nombreInstitucion varchar (50),
telefono varchar (10),
extencion varchar (10),
correo varchar (30)
);

CREATE TABLE Direccion (
idDireccion int PRIMARY KEY AUTO_INCREMENT,
colonia varchar (50),
codigoPost varchar (10),
calle varchar (50),
numero varchar (10),
estadoCiudad varchar (25),
pais varchar (20),
plantel varchar (50),
idOrigen1 int,
foreign key (idOrigen1) references Origen (idOrigen)
);

CREATE TABLE Expositor (
idExpositor int PRIMARY KEY AUTO_INCREMENT,
nombres varchar (100),
apellidoPat varchar (50),
apellidoMat varchar (50),
curp varchar (20),
idOrigen2 int,
foreign key (idOrigen2) references Origen (idOrigen),
idTipoExpositor1 int,
foreign key (idTipoExpositor1) references TipoExpositor (idTipoExpositor)
);

CREATE TABLE Expositor0TipoEve (
idExpositor1 int,
foreign key (idExpositor1) references Expositor (idExpositor),
idTipoEvento1 int,
foreign key (idTipoEvento1) references TipoEvento (idTipoEvento)
);

CREATE TABLE Contacto (
idContacto int PRIMARY KEY AUTO_INCREMENT,
correo1 varchar (30),
correo2 varchar (30),
telefono varchar (10),
celular varchar (10),
idExpositor2 int,
foreign key (idExpositor2) references Expositor (idExpositor)
);

CREATE TABLE AprobacionEvento(
idAprobacion int PRIMARY KEY AUTO_INCREMENT,
estado varchar (10),
idEvento2 int,
foreign key (idEvento2) references Evento (idEvento)
);

/* Consultas Basicas */
select * from tipoevento;
select * from evento;
select * from horarioevento;
select * from tipoequipo;
select * from equiporequerido;
select * from equiporeq0evento;
select * from origen;
select * from direccion;
select * from tipoexpositor;
select * from expositor;
select * from contacto;
select * from expositor0tipoeve;
select * from aprobacionevento;