/*borrado y creación de la base de datos pedidos😳🍆*/
DROP DATABASE IF EXISTS pedidos;
 
CREATE DATABASE pedidos CHARACTER SET utf8 COLLATE utf8_general_ci;

USE pedidos; 

/*creacion de categorias (RTM) Diego */
create table CATEGORIAS(
CodCat int AUTO_INCREMENT primary key,
Nombre varchar(45) unique NOT null,
Descripcion varchar(200)
);
 
/*creación de la tabla productos Jose Luis 🧐*/
create table PRODUCTOS (
   CodProd int AUTO_INCREMENT primary key not null,
   Nombre varchar(45) not null unique,
   Descripcion varchar(90) not null,
   Peso real not null,
   Stock int not null,
   Categoria int not null
);
 
 
/*creación de la tabla restaurantes →> Fraaaaan 🤠*/
create table RESTAURANTES (
CodRes int AUTO_INCREMENT primary key,
Correo varchar(80) unique,
Clave varchar(45),
Pais varchar(45),
CP integer,
Ciudad varchar(45),
Direccion varchar(200),
EsAdmin boolean
);
 
/*Inserción pedidos Javier 😃👍*/
create table PEDIDOS(
CodPed int AUTO_INCREMENT primary key,
Fecha TIMESTAMP,
Enviado integer,
Restaurante integer,
FOREIGN KEY (Restaurante) REFERENCES RESTAURANTES(CodRes)
);
/*creación de Tabla pedidos.pedidosproductos Marçal 🚀*/
create table PEDIDOSPRODUCTOS(
CodPedProd int AUTO_INCREMENT ,
Pedido int ,
Producto int ,
Unidades int,
FOREIGN KEY(Pedido) REFERENCES PEDIDOS(CodPed), 
FOREIGN KEY(Producto) REFERENCES PRODUCTOS(CodProd), 
PRIMARY KEY(CodPedProd)
);
 
/*Insert de categorias (RTM) Diego*/
insert into CATEGORIAS(Nombre, Descripcion)
    values('Bebida con','bebidas con alcohol'),
        ('Bebida sin','bebidas sin alcohol'),
        ('Comida','alimentos normales');
 
 
 
 
 
 
/*Insert de Restaurantes Fran Pizarro 😎*/ 
 
insert into RESTAURANTES(Correo, Clave, Pais, CP, Ciudad, Direccion, EsAdmin) 
values('restaurante1@gmail.com','Admin123','Espana',14930,'Baza',
'Calle El Loco 1', 0),
('restaurante2@gmail.com','Admin123','Francia',23098,'Paris',
'Avenida De Los Campos Eliseos 2', 0), 
('Admin', 'admin', 'España', 11111, 'Zujar','Calle Rabalía', 1);
 
 
 
/* Insertar productos Sergio  */
 
insert into PRODUCTOS(Nombre, Descripcion, Peso, Stock, Categoria)
     values('Cerveza Alhambra tercio','Botellín de cervaza marca Alhambra un tercio',0.5,100,1),
       ('Cerveza Cruzcampo quinto sin alcohol','Botellín de cervaza marca Cruzcampo quinto sin alcohol',0.7,120,2),
       ('Patatas fritas Rivera 200 gr','Bolsa de patatas fritas marca La rivera, 200 gr',0.2,80,3);
 
 
 
 
 

