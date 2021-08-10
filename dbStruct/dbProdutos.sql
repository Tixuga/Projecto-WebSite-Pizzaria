DROP TABLE IF EXISTS produtos;

CREATE TABLE produtos(
    id_produtos INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(255) NOT NULL,
    id_categorias INT,
    FOREIGN KEY(id_categorias) REFERENCES categorias(id_categorias),
    tamanho VARCHAR(50) NOT NULL,
    preco DECIMAL(4,2) NOT NULL
);
