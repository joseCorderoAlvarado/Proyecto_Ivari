create database bdArteSur;
use bdArteSur;

create table tipo_direccion 
(
	id_tipo int primary key auto_increment,
	tipo enum('personal','envio','facturacion')
); 


create table direccion
(
	id_Direccion int primary key auto_increment,
	calle varchar (50),
	numero_Int varchar (45),
    numero_Ext varchar (45),
	colonia varchar (45),
    municipio varchar (45),
    ciudad varchar (45),
    pais varchar (45),
	codigo_postal varchar(8),
    
    fk_tipo int,
    constraint fk_direccion_tipo foreign key (fk_tipo) references tipo_direccion (id_tipo)

	ON DELETE CASCADE
	ON UPDATE CASCADE
);

create table genero 
(
	id_genero int primary key auto_increment,
	Sexo varchar (15)
);

create table persona
(
	id_persona int primary key auto_increment,
	nombre_persona varchar (50),
	apellido_paterno varchar (45),
	apellido_materno varchar (45),
	fecha_nacimiento datetime,
    correo_electronico varchar(100),
    telefono varchar(25),

	fk_genero int,
    constraint fk_persona_genero foreign key (fk_genero) references genero (id_genero)

	ON DELETE CASCADE
	ON UPDATE CASCADE
);

create table detalle_persona_direccion
(
	id_detperdir int primary key auto_increment,

	fk_persona int,
	constraint fk_detperdir_dersona foreign key (fk_persona) references persona (id_persona),
    
    fk_direccion int,
	constraint fk_detperdir_direccion foreign key (fk_direccion) references direccion (id_direccion)
    
    ON DELETE CASCADE
	ON UPDATE CASCADE
);

create table roles 
(
	id_Rol int primary key auto_increment,
	rol varchar (15)
);

create table usuario 
(
	id_Usuario int primary key auto_increment,
	contraseña varchar (200),

	fk_persona int,
	constraint fk_usuario_persona foreign key (fk_persona) references persona (id_persona),
    
    fk_rol int,
	constraint fk_usuario_rol foreign key (fk_rol) references roles (id_Rol)
    
    ON DELETE CASCADE
	ON UPDATE CASCADE
);


create table categoria 
(
	id_Categoria int primary key auto_increment,
	descripcion varchar (100)
);

create table estatus
(
	id_Estatus int primary key auto_increment,
    descripcion varchar(100)
);

create table bonificacion
(
	id_bonificacion int primary key auto_increment,
    porcentaje varchar(50)
);

CREATE TABLE proveedores (
  id_proveedores int primary key auto_increment default null,
  nombre_proveedor varchar (50) default null, 
  sucursal varchar (50)default null,
  encargado varchar (50)default null,
  fecha_ingreso date default null,
  fecha_egreso date default null,
  sede_principal varchar (50) default null
);

create table producto
(
	id_producto int primary key auto_increment,
	nombre_producto varchar (100),
	descripcion varchar (200),
	precio double,
	imagen longblob,
    
    fk_categoria int,
	constraint fk_producto_categoria foreign key (fk_categoria) references categoria (id_categoria),
    
    fk_proveedores int,
	constraint fk_producto_proveedores foreign key (fk_proveedores) references proveedores (id_proveedores),
    
    
    fk_estatus int,
	constraint fk_producto_estatus foreign key (fk_estatus) references estatus (id_estatus)
    
    ON DELETE CASCADE
	ON UPDATE CASCADE
);


create table venta 
(
	 id_venta int  primary key auto_increment,
     folio varchar(45)default null, 
     cantidad int default null,
     costo double default null,
     fecha varchar(45) default null,

     
     fk_bonificacion int,
	 constraint fk_venta_bonificacion foreign key (fk_bonificacion) references bonificacion (id_bonificacion),

    
     fk_producto int,
	 constraint fk_venta_producto foreign key (fk_producto) references producto (id_producto)
     
     
     
     ON DELETE CASCADE
	 ON UPDATE CASCADE
);


create table carrito_temporal
(
	id_carrito int primary key auto_increment,
    
    fk_Producto int,
	 constraint fk_Carrito_Producto foreign key (fk_Producto) references Producto (id_Producto),
    
    cantidad int,
    
    costo double,
    
    fk_Persona int,
	constraint fk_Carrito_Persona foreign key (fk_Persona) references Persona (id_Persona)
    ON DELETE CASCADE
	ON UPDATE CASCADE
);

create table detalle_venta_carrito_temporal
(
	id_detalle_venta_carrito_temporal int primary key auto_increment,
    
	fk_carrito_temporal int,
	constraint fk_carrito_temporal_venta foreign key (fk_carrito_temporal) references carrito_temporal (id_carrito),
    
    fk_persona int,
	constraint fk_persona_venta foreign key (fk_persona) references persona (id_persona),
     
     fk_venta int,
	 constraint fk_venta_carrito_temporal foreign key (fk_venta) references venta (id_venta)
     
     ON DELETE CASCADE
	 ON UPDATE CASCADE
);



create table paqueteria
(
	id_Paqueteria int primary key auto_increment,
	nombre varchar(50) not null
);

create table envio 
(
	id_envio int primary key auto_increment,
    caracteristicas varchar(500) not null,
    costo double not null,
    
    fk_venta int,
	constraint fk_envio_venta foreign key (fk_venta) references venta (id_venta),
    
    fk_direccion int,
	constraint fk_envio_direccion foreign key (fk_direccion) references direccion (id_direccion),
    
    fk_paqueteria int,
	constraint fk_envio_paqueteria foreign key (fk_paqueteria) references paqueteria (id_paqueteria)
    
    ON DELETE CASCADE
	ON UPDATE CASCADE
);



