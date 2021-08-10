DROP TABLE IF EXISTS encomendas;

CREATE TABLE encomendas(
    id_encomendas INT PRIMARY KEY AUTO_INCREMENT,
    id_utilizador INT,
    FOREIGN KEY (id_utilizador) REFERENCES utilizador(id_utilizador),
    id_encomendas_produtos INT,
    FOREIGN KEY (id_encomendas_produtos) REFERENCES encomendas_produtos(id_encomendas_produtos),
    name VARCHAR(50) NOT NULL,
    dataHora TIMESTAMP NOT NULL,
    morada VARCHAR(255) NOT NULL,
    valorTotal NUMERIC (6)
);