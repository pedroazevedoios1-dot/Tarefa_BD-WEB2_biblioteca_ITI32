CREATE DATABASE BIBLIOTECA

USE BIBLIOTECA;

CREATE TABLE Livro (    
    isbn VARCHAR(20) not null PRIMARY KEY, 
    titulo VARCHAR(200) NOT NULL,
    ano_publicacao date not null,
    editora VARCHAR(100) not null,
    qtd_total INT NOT NULL,
    qtd_disponivel INT NOT NULL
);