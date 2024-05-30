
create table tipo_usuario(
id int identity (1,1)primary key,
tipo_usuario varchar(100) not null


)

CREATE TABLE usuarios(
id_usuario int identity(1,1) primary key,
usuario varchar(100),
contrasenia varchar(100),
tipo_usuario int,
CONSTRAINT FK_USUARIOS FOREIGN KEY (tipo_usuario)REFERENCES  tipo_usuario(id)
)

INSERT INTO TipoPago ( tipo_pago) VALUES
( 'Tarjeta de Crédito'),
( 'efectivo');


CREATE TABLE productos(
id_producto int identity (1,1) primary key,
nombreProducto varchar(250) not null,
descripcion varchar(150) not null,
categoria int ,
existencia int,
precio int
CONSTRAINT FK_productos FOREIGN KEY (categoria)REFERENCES categoria(id_categoria)
)

CREATE TABLE ventas(
id_venta int identity (1,1) primary key,
usuario int,
estado varchar(100) not null,
metodoPago int,
producto int,
fechaCompra varchar(100) not null
CONSTRAINT FK_ventas_usuario FOREIGN KEY (usuario) REFERENCES usuarios(id_usuario),
CONSTRAINT FK_ventas_producto FOREIGN KEY (producto) REFERENCES productos(id_producto),
CONSTRAINT Fk_ventas_metodoPago FOREIGN KEY(metodoPago)REFERENCES TipoPago(id_tipo_pago)
)

create table cuentas(
id_cuenta int identity(1,1) primary key,
id_producto int,
usuario varchar(100),
contrasenia varchar(100)
CONSTRAINT FK_cuentas_existentes FOREIGN KEY (id_producto) REFERENCES productos(id_producto)

)



INSERT INTO productos (nombreProducto, descripcion, categoria, existencia,precio) VALUES
('Netflix', 'Cuenta de Netflix premium', 1, 3,30),
('Netflix', 'Cuenta de Netflix estándar', 1, 10,30),
('Netflix', 'Cuenta de Netflix básica', 1, 10,25),
('Disney+', 'Cuenta de Disney+ premium', 1, 6,25),
('Disney+', 'Cuenta de Disney+ estándar', 1, 5,25),
('HBO Max', 'Cuenta de HBO Max premium', 1, 2 ,25);


INSERT INTO cuentas(id_producto,usuario,contrasenia)VALUES
(1,'netflix_user2', 'netflix_pass2'),
(1,'netflix_user3', 'netflix_pass3'),
(2,'disney_user1', 'disney_pass1'),
(2,'disney_user2', 'disney_pass2'),
(3,'hbo_user1', 'hbo_pass1');

--consultapara obtener las ventas de los productos
SELECT U.usuario,V.estado,TP.tipo_pago,PR.nombreProducto,V.fechaCompra
        FROM ventas AS V
        INNER JOIN usuarios AS U 
        ON V.usuario=U.id_usuario
        INNER JOIN TipoPago AS TP
        ON V.metodoPago=TP.id_tipo_pago
        INNER JOIN productos AS PR
        ON V.producto=PR.id_producto


--consulta para obtener los productos con su categoria
SELECT P.nombreProducto,P.descripcion,C.nombrecategoria,P.existencia,P.precio
	FROM productos AS P
	INNER JOIN Categoria AS C
	ON P.categoria=C.id_categoria;
