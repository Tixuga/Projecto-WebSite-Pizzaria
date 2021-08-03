DROP TABLE IF EXISTS products;

CREATE TABLE products(
    id_produtos INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(30) NOT NULL,
    id_categorias INT,
    FOREIGN KEY(id_categorias) REFERENCES categorias(id_categorias),
    tamanho VARCHAR(50) NOT NULL,
    preço NUMERIC(10) NOT NULL
);