CREATE DATABASE IF NOT EXISTS notaexpress CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE notaexpress;

CREATE TABLE IF NOT EXISTS notas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  codigo VARCHAR(10) NOT NULL UNIQUE,
  tipo ENUM('nota', 'arquivo', 'link') NOT NULL,
  conteudo TEXT NOT NULL,
  criado_em DATETIME DEFAULT CURRENT_TIMESTAMP,
  expiracao DATETIME NULL
);
