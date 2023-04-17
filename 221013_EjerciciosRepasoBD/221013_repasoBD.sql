-- 1 Crear la tabla Pedidos  suponiendo que CodigoPedido es autoincrementable,
--  Estado puede tomar uno de entre los valores  Recibido, Enviado o Pendiente,
--   que será el valor por defecto.
--    Comentarios será de tipo   blog. ¡Atención a las claves primaria y foránea!

CREATE TABLE Pedidos (
    CodigoPedido INT AUTO_INCREMENT PRIMARY KEY,
    CodigoCliente VARCHAR(10),
    FechaPedido DATE DEFAULT CURRENT_DATE,
    Estado ENUM('Recibido', 'Enviado', 'Pendiente') DEFAULT 'Pendiente',
    Comentarios BLOB,
    FOREIGN KEY (CodigoCliente) REFERENCES Clientes(CodigoCliente)
);


-- 2 Inserción de un registro en la tabla Pedidos definida en la pregunta anterior
--  considerando que CodigoCliente es cadena de texto y que se rellenan todos los campos
--   excepto el CodigoPedido que se asigna solo.

INSERT INTO Pedidos (CodigoCliente, FechaPedido, Estado, Comentarios)
VALUES ('CODIGO_CLIENTE', '2023-03-05', 'Pendiente', 'COMENTARIOS');


-- 3 Nombre completo y CodigoOficinal de los empleados
--  que atienden al menos a un cliente de la región de Murcia.

SELECT CONCAT(Nombre, ' ', Apellido) AS 'Nombre completo', CodigoOficina
FROM Empleados
WHERE CodigoEmpleado IN (
    SELECT DISTINCT CodigoEmpleado
    FROM Clientes
    WHERE Region = 'Murcia'
);


-- 4 Número de  empleados  cuyas oficinas  tienen un teléfono que  termine en 777. (usar join)

SELECT COUNT(*) AS 'Numero de empleados'
FROM Empleados
JOIN Oficinas ON Empleados.CodigoOficina = Oficinas.CodigoOficina
WHERE Oficinas.Telefono LIKE '%777';
