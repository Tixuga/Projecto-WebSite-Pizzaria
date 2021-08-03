DROP TABLE IF EXISTS utilizador;

CREATE TABLE utilizador(
    id_utilizador INT PRIMARY KEY AUTO_INCREMENT,
    id_tipo_utilizador INT(11) NOT NULL,
    FOREIGN KEY (id_tipo_utilizador) REFERENCES tipoUtilizador(id_tipo_utilizador),
    password VARCHAR(255),
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) UNIQUE,
    contact INT(9) UNIQUE
);