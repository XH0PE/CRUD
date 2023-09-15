CREATE DATABASE IF NOT EXISTS saga;

USE saga;

CREATE TABLE IF NOT EXISTS formacion (
  ficha VARCHAR(255) PRIMARY KEY,
  nombre_for VARCHAR(255) NOT NULL, 
  tipo ENUM('Técnico', 'Tecnólogo', 'Auxiliar', 'Curso corto') NOT NULL,
  jornada ENUM('Mañana', 'Tarde', 'Noche') NOT NULL,
  numero_amb VARCHAR(255) NOT NULL,
  sede ENUM('Principal', 'Alterna', 'Virtual')
);

CREATE TABLE IF NOT EXISTS fichas (
  ficha_id VARCHAR(255) PRIMARY KEY,
  ficha VARCHAR(255),
  ins_id INT,
  FOREIGN KEY (ficha) REFERENCES formacion(ficha)
);

CREATE TABLE IF NOT EXISTS instructor (
  ins_id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  apellido VARCHAR(255) NOT NULL,
  cedula VARCHAR(255) NOT NULL UNIQUE,
  correo VARCHAR(255) NOT NULL,
  celular VARCHAR(255) NULL,
  user VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  ficha_id VARCHAR(255),
  pre_id INT,
  FOREIGN KEY (ficha_id) REFERENCES fichas(ficha_id),
  FOREIGN KEY (pre_id) REFERENCES prestamos(pre_id)
);

ALTER TABLE fichas
ADD FOREIGN KEY (ins_id) REFERENCES instructor(ins_id);