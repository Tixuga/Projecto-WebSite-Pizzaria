DROP TABLE IF EXISTS encomendas_produtos;

CREATE TABLE encomendas_produtos(
    id_encomendas_produtos INT PRIMARY KEY AUTO_INCREMENT,
    id_produtos INT,
    FOREIGN KEY (id_produtos) REFERENCES products(id_produtos),
    quantidade INT(100) NOT NULL
);