create database streamm;
CREATE TABLE AutenticadorUsuario (
    id_autenticador INT PRIMARY KEY,
    correo VARCHAR(255) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    tipo_usuario VARCHAR(50) NOT NULL,  -- 'cliente' o 'administrador'
    id_avatar INT,
    FOREIGN KEY (id_avatar) REFERENCES Avatar(id_avatar)
);
CREATE TABLE RegistroUsuario (
    id_registro INT PRIMARY KEY,
    id_autenticador INT,
    nombre VARCHAR(255) NOT NULL,
    telefono VARCHAR(20),
    FOREIGN KEY (id_autenticador) REFERENCES AutenticadorUsuario(id_autenticador)
);
CREATE TABLE CompraInvitado (
    id_compra_invitado INT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    telefono VARCHAR(20),
    fecha_compra DATE NOT NULL,
    fecha_vencimiento DATE
);
CREATE TABLE PrecioCliente (
    id_precio_cliente INT PRIMARY KEY,
    nombre_cuenta VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL
);
CREATE TABLE CuentaAdmin (
    id_cuenta_admin INT PRIMARY KEY,
    id_precio_cliente INT,
    correo VARCHAR(255) NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    fecha_suscripcion DATE,
    fecha_vencimiento DATE,
    FOREIGN KEY (id_precio_cliente) REFERENCES PrecioCliente(id_precio_cliente)
);
CREATE TABLE TipoSuscripcion (
    id_tipo_suscripcion INT PRIMARY KEY,
    id_precio_cliente INT,
    tipo_suscripcion VARCHAR(255) NOT NULL,
    tiempo_suscripcion INT,
    FOREIGN KEY (id_precio_cliente) REFERENCES PrecioCliente(id_precio_cliente)
);
CREATE TABLE Avatar (
    id_avatar INT PRIMARY KEY,
    nombre_avatar VARCHAR(255) NOT NULL,
    ubicacion_avatar VARCHAR(255)
);
CREATE TABLE NoPedido (
    id_no_pedido INT PRIMARY KEY,
    no_pedido_cliente INT,
    no_pedido_invitado INT
);
CREATE TABLE TipoPago (
    id_tipo_pago INT PRIMARY KEY,
    tipo_pago VARCHAR(255) NOT NULL
);
CREATE TABLE VentaClienteRegistrado (
    id_venta_cliente_registrado INT PRIMARY KEY,
    id_cuenta_admin INT,
    id_precio_cliente INT,
    id_autenticador INT,
    id_tipo_pago INT,
    id_tipo_suscripcion INT,
    id_no_pedido INT,
    fecha_compra DATE,
    FOREIGN KEY (id_cuenta_admin) REFERENCES CuentaAdmin(id_cuenta_admin),
    FOREIGN KEY (id_precio_cliente) REFERENCES PrecioCliente(id_precio_cliente),
    FOREIGN KEY (id_autenticador) REFERENCES AutenticadorUsuario(id_autenticador),
    FOREIGN KEY (id_tipo_pago) REFERENCES TipoPago(id_tipo_pago),
    FOREIGN KEY (id_tipo_suscripcion) REFERENCES TipoSuscripcion(id_tipo_suscripcion),
    FOREIGN KEY (id_no_pedido) REFERENCES NoPedido(id_no_pedido)
);
CREATE TABLE InfoVentasInvitado (
    id_venta_invitado INT PRIMARY KEY,
    id_cuenta_admin INT,
    id_tipo_pago INT,
    id_no_pedido INT,
    id_compra_invitado INT,
    id_tipo_suscripcion INT,
    FOREIGN KEY (id_cuenta_admin) REFERENCES CuentaAdmin(id_cuenta_admin),
    FOREIGN KEY (id_tipo_pago) REFERENCES TipoPago(id_tipo_pago),
    FOREIGN KEY (id_no_pedido) REFERENCES NoPedido(id_no_pedido),
    FOREIGN KEY (id_compra_invitado) REFERENCES CompraInvitado(id_compra_invitado),
    FOREIGN KEY (id_tipo_suscripcion) REFERENCES TipoSuscripcion(id_tipo_suscripcion)
);
CREATE TABLE FechasVentasClientes (
    id_fecha_ventas_clientes INT PRIMARY KEY,
    fecha_compra_invitado DATE,
    fecha_compra_registrado DATE
);
CREATE TABLE DetalleVentaCliente (
    id_detalle_venta INT PRIMARY KEY,
    id_venta_cliente_registrado INT,
    FOREIGN KEY (id_venta_cliente_registrado) REFERENCES VentaClienteRegistrado(id_venta_cliente_registrado)
);
CREATE TABLE DetalleInvitado (
    id_detalle_invitado INT PRIMARY KEY,
    id_venta_invitado INT,
    FOREIGN KEY (id_venta_invitado) REFERENCES InfoVentasInvitado(id_venta_invitado)
);
