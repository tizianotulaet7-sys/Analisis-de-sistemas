-- Antes de empezar debe estar creada la base con los siguientes parametros
CREATE DATABASE IF NOT EXISTS test_db;
USE test_db;

-- Creamos el usuario local y lo limitamos solo a esta base de datos
CREATE USER IF NOT EXISTS 'test'@'localhost' IDENTIFIED BY 'user.123$';
GRANT ALL PRIVILEGES ON test_db.* TO 'test'@'localhost';
FLUSH PRIVILEGES;

-- Verificacion opcional:
-- SHOW GRANTS FOR 'test'@'localhost';