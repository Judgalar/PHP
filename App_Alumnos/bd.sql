DROP DATABASE IF EXISTS Alumnos;
CREATE DATABASE Alumnos;

USE Alumnos;

CREATE TABLE Usuarios (
    nickName VARCHAR(50) NOT NULL PRIMARY KEY,
    contrasena VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    direccion VARCHAR(100),
    curriculum VARCHAR(200),
    situacion_laboral VARCHAR(50),
    es_administrador BOOLEAN NOT NULL DEFAULT 0
);

INSERT INTO Usuarios (nickName, contrasena, nombre, apellido, correo, telefono, direccion, curriculum, situacion_laboral, es_administrador)
VALUES ('admin', 'admin', 'Admin', 'Admin', 'admin@example.com', '123456789', 'Dirección de Admin', 'https://ejemplo.com/curriculum.pdf', 'Empleado', 1);
