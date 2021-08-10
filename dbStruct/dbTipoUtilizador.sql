DROP TABLE IF EXISTS tipoUtilizador;

CREATE TABLE tipoUtilizador(
    id_tipo_utilizador INT(11) PRIMARY KEY NOT NULL,
    descricao varchar(255) NOT NULL
);