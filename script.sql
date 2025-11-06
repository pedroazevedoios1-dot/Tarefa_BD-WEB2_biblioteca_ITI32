CREATE TABLE Livro (    
    isbn INT PRIMARY KEY, 
    titulo VARCHAR(200) NOT NULL,
    ano_publicacao date,
    editora VARCHAR(100),
    qtd_total INT NOT NULL,
    qtd_disponivel INT NOT NULL
);