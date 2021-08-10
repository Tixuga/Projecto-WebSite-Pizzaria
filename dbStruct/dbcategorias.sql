DROP TABLE IF EXISTS categorias;

CREATE TABLE categorias(
    id_categorias INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

INSERT INTO `categorias`(`id_categorias`, `name`) VALUES (1,'Pão de Alho');
INSERT INTO `categorias`(`id_categorias`, `name`) VALUES (2,'Saladas');
INSERT INTO `categorias`(`id_categorias`, `name`) VALUES (3,'Massas');
INSERT INTO `categorias`(`id_categorias`, `name`) VALUES (4,'Lasanhas');
INSERT INTO `categorias`(`id_categorias`, `name`) VALUES (5,'Kebab');
INSERT INTO `categorias`(`id_categorias`, `name`) VALUES (6,'Calzones');
INSERT INTO `categorias`(`id_categorias`, `name`) VALUES (7,'Pizzas');