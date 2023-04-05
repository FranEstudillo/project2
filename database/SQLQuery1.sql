CREATE TABLE especialistas (
	id INT IDENTITY(1,1) PRIMARY KEY,
	nombre VARCHAR(50) NOT NULL,
	apellido_paterno VARCHAR(50) NOT NULL,
	apellido_materno VARCHAR(50) NOT NULL,
	correo_electronico VARCHAR(100) NOT NULL,
	password VARCHAR(100) NOT NULL,
	especialidad VARCHAR(100) NOT NULL,
	fecha_nacimiento DATE NOT NULL,
	cedula_profesional VARCHAR(20) NOT NULL,
	fecha_registro DATETIME NOT NULL DEFAULT GETDATE()
);


select * from especialistas