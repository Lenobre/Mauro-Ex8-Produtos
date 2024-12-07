CREATE DATABASE IF NOT EXISTS mauro_produtos;

USE mauro_produtos;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    foto_url VARCHAR(255) NOT NULL
);