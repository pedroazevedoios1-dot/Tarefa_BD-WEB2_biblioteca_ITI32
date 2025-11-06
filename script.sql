CREATE TABLE Livro (
    isbn VARCHAR(20) PRIMARY KEY, 
    titulo VARCHAR(255) NOT NULL,
    ano_publicacao INT,
    editora VARCHAR(100),
    qtd_total INT NOT NULL,
    qtd_disponivel INT NOT NULL
);