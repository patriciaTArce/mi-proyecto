

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    rol ENUM('cliente', 'admin') DEFAULT 'cliente'
);

CREATE TABLE espacios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    tipo ENUM('coworking', 'sala', 'escritorio'),
    capacidad INT,
    disponibilidad BOOLEAN DEFAULT 1
);

CREATE TABLE reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    espacio_id INT,
    fecha DATE,
    hora_inicio TIME,
    hora_fin TIME,
    pagado BOOLEAN DEFAULT 0,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (espacio_id) REFERENCES espacios(id)
);
