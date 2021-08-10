DROP TABLE IF EXISTS tipoUtilizador;

CREATE TABLE tipoUtilizador(
    id_tipo_utilizador INT(11) PRIMARY KEY NOT NULL,
    descricao varchar(255) NOT NULL
);

DROP TABLE IF EXISTS utilizador;

CREATE TABLE utilizador(
    id_utilizador INT PRIMARY KEY AUTO_INCREMENT,
    id_tipo_utilizador INT(11) NOT NULL,
    FOREIGN KEY (id_tipo_utilizador) REFERENCES tipoUtilizador(id_tipo_utilizador),
    password VARCHAR(255),
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) UNIQUE,
    contact INT(9) NOT NUll
);

DROP TABLE IF EXISTS categorias;

CREATE TABLE categorias(
    id_categorias INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

DROP TABLE IF EXISTS produtos;

CREATE TABLE produtos(
    id_produtos INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    id_categorias INT,
    FOREIGN KEY(id_categorias) REFERENCES categorias(id_categorias),
    tamanho VARCHAR(50) NOT NULL,
    preco DECIMAL(4,2) NOT NULL
);

DROP TABLE IF EXISTS encomendas_produtos;

CREATE TABLE encomendas_produtos(
    id_encomendas_produtos INT PRIMARY KEY AUTO_INCREMENT,
    id_produtos INT,
    FOREIGN KEY (id_produtos) REFERENCES produtos(id_produtos),
    quantidade INT(100) NOT NULL
);

DROP TABLE IF EXISTS encomendas;

CREATE TABLE encomendas(
    id_encomendas INT PRIMARY KEY AUTO_INCREMENT,
    id_utilizador INT,
    FOREIGN KEY (id_utilizador) REFERENCES utilizador(id_utilizador),
    id_encomendas_produtos INT,
    FOREIGN KEY (id_encomendas_produtos) REFERENCES encomendas_produtos(id_encomendas_produtos),
    dataHora TIMESTAMP NOT NULL,
    morada VARCHAR(255) NOT NULL,
    valorTotal DECIMAL(4,2) NOT NULL
);
