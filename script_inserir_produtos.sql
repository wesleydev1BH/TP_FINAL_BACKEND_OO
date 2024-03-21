INSERT INTO categorias (nome) VALUES ('Eletrônicos');
INSERT INTO categorias (nome) VALUES ('Roupas');
INSERT INTO categorias (nome) VALUES ('Livros');
INSERT INTO categorias (nome) VALUES ('Alimentos');

INSERT INTO produtos (nome, descricao, preco, categoria_id) VALUES ('Smartphone', 'Um smartphone de última geração', 999.99, 1);
INSERT INTO produtos (nome, descricao, preco, categoria_id) VALUES ('Notebook', 'Um notebook poderoso para trabalho e entretenimento', 1499.99, 1);
INSERT INTO produtos (nome, descricao, preco, categoria_id) VALUES ('Camiseta', 'Uma camiseta confortável e estilosa', 19.99, 2);
INSERT INTO produtos (nome, descricao, preco, categoria_id) VALUES ('Calça Jeans', 'Uma calça jeans de alta qualidade', 39.99, 2);
INSERT INTO produtos (nome, descricao, preco, categoria_id) VALUES ('O Hobbit', 'Um clássico da literatura fantástica', 24.99, 3);
INSERT INTO produtos (nome, descricao, preco, categoria_id) VALUES ('A Culpa é das Estrelas', 'Uma emocionante história de amor e superação', 14.99, 3);
INSERT INTO produtos (nome, descricao, preco, categoria_id) VALUES ('Arroz', 'Arroz integral de 1kg', 4.99, 4);
INSERT INTO produtos (nome, descricao, preco, categoria_id) VALUES ('Feijão', 'Feijão preto de 1kg', 3.99, 4);

INSERT INTO estoque (quantidade, produto_id) VALUES (100, 1);
INSERT INTO estoque (quantidade, produto_id) VALUES (50, 2);
