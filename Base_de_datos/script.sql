-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS portafolio_db;
USE portafolio_db;

-- Crear la tabla 'contactos'
CREATE TABLE IF NOT EXISTS contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    telefono VARCHAR(15),
    mensaje TEXT NOT NULL
);

-- Crear la tabla 'portafolio'
CREATE TABLE IF NOT EXISTS portafolio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    imagen VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL
);

-- Insertar datos iniciales en la tabla 'portafolio'
INSERT INTO portafolio (titulo, imagen, descripcion) VALUES
    ('Landing Page Creativa', 'img/diseño.png', 'Una página de aterrizaje moderna y responsiva diseñada para captar clientes potenciales.'),
    ('Galería Interactiva', 'img/galeria.png', 'Un sitio web con una galería dinámica y atractiva para mostrar imágenes y contenido visual.'),
    ('Plataforma Informativa', 'img/informatica.png', 'Un portal web diseñado para compartir información relevante con un diseño profesional.');