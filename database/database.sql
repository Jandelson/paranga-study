CREATE TABLE endereco
(
    id_endereco integer PRIMARY KEY AUTO_INCREMENT,
    id_contato int NOT NULL,
    logradouro varchar(255),
    cidade varchar(255),
    bairro varchar(255),
    uf varchar(2),
    numero varchar(255),
    complemento varchar(255)
);
--
CREATE TABLE tipocontato
(
    id_tipo_contato integer PRIMARY KEY AUTO_INCREMENT,
    descricao varchar(255)
);
--
CREATE TABLE contato
(
    id_contato integer PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255),
    email varchar(255),
    password varchar(255) NOT NULL,
    telefone varchar(255),
    id_tipo_contato integer,
    id_endereco integer,
    CONSTRAINT fk_Endereco FOREIGN KEY (id_endereco) REFERENCES endereco (id_endereco),
    CONSTRAINT fk_TipoContato FOREIGN KEY (id_tipo_contato) REFERENCES tipocontato (id_tipo_contato)
);
--
CREATE TABLE agenda
(
    id_contato integer PRIMARY KEY AUTO_INCREMENT,
    data_start datetime DEFAULT NULL,
    data_end datetime DEFAULT NULL,
    titulo_agenda varchar(255),
    anotacao_agenda varchar(255),
    url_event varchar(255),
    tipo integer,
);

-- ON UPDATE CASCADE 
-- ON DELETE CASCADE;