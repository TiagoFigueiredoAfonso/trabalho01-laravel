CREATE TABLE empresa(
	id SERIAL NOT NULL,
	nome VARCHAR(100),
	endereco VARCHAR(100),
	area_id INTEGER
);

CREATE TABLE area(
	id SERIAL NOT NULL,	
	descricao VARCHAR(100)
);

INSERT INTO empresa (nome, endereco, area_id)VALUES('Supermercado', 'Rua da Paz', 1);
INSERT INTO empresa (nome, endereco, area_id)VALUES('Sushi', 'Rua do Sushi', 2);
INSERT INTO empresa (nome, endereco, area_id)VALUES('Material de Construção', 'Rua do Material', 3);
INSERT INTO area (descricao)VALUES('Varejo');
INSERT INTO area (descricao)VALUES('Alimentício');
INSERT INTO area (descricao)VALUES('Comércio');



