CREATE DATABASE db_client;
USE db_client;

CRETE TABLE TB_Cliente(
    cli_cod INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cli_nome VARCHAR(30) NOT NULL,
    cli_sobrenome VARCHAR(40) NOT NULL,
    cli_email VARCHAR(50) NOT NULL,
    cli_cpf VARCHAR(11) UNIQUE,
    cli_sexo CHAR(1) DEFAULT 'F' CHECK(IN('F','M')),
    cli_usuario VARCHAR(20) NOT NULL,
    cli_senha VARCHAR(20) NOT NULL
);