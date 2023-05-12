DROP DATABASE IF EXISTS Alumnos;
CREATE DATABASE Alumnos;

USE Alumnos;

CREATE TABLE Usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nickName VARCHAR(50) NOT NULL,
    contrasena VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    correo_electronico VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    direccion VARCHAR(100) NOT NULL,
    enlace_curriculum VARCHAR(200) NOT NULL,
    situacion_laboral VARCHAR(50) NOT NULL,
    es_administrador BOOLEAN NOT NULL DEFAULT 0
);
