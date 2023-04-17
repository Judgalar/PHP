CREATE DATABASE IF NOT EXISTS Biblioteca;
USE Biblioteca;
DROP TABLE IF EXISTS Libros;

CREATE TABLE Libros (
	ID INT AUTO_INCREMENT PRIMARY KEY,
	ISBN varchar(13) NOT NULL, 
	Titulo varchar(20),
   	Autor varchar(20),
    	Fecha date,
    	Lengua varchar(20),
	Editorial varchar(20),
	Encuadernacion varchar(20)
);
    
DROP TABLE IF EXISTS Usuarios;
CREATE TABLE Usuarios (
	DNI varchar(9)  PRIMARY KEY,
	Nombre varchar(20),
	Apellidos varchar(20),
	Telefono varchar(9),
	Edad int,
	Libro int,
	FOREIGN KEY (Libro) REFERENCES Libros(ID)
);
