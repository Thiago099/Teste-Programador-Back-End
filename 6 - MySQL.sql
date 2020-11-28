-- Questões de SQL - MySql
-- Considere o seguinte modelo
CREATE DATABASE tsa_teste_backend_bd;
USE tsa_teste_backend_bd;

CREATE TABLE organizacao(
    id INT UNSIGNED AUTO_INCREMENT NOT NULL,
    nome VARCHAR(200) NOT NULL,
    data_fundacao DATE NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO organizacao(nome, data_fundacao) VALUES ('empresa_1', '2020-07-01');
INSERT INTO organizacao(nome, data_fundacao) VALUES ('empresa_2', '1980-05-12');

CREATE TABLE colaborador(
    id INT UNSIGNED AUTO_INCREMENT NOT NULL,
    nome VARCHAR(255) NOT NULL,
    organizacao_id INT UNSIGNED NOT NULL,
    data_nascimento DATE NOT NULL,
    salario DOUBLE(9,2),
    PRIMARY KEY(id),
    FOREIGN KEY (organizacao_id) REFERENCES organizacao (id)
);

INSERT INTO colaborador(nome, data_nascimento, salario, organizacao_id) 
VALUES('Alessandra', '1998-02-06', 5000, 1);

INSERT INTO colaborador(nome, data_nascimento, salario, organizacao_id) 
VALUES('Leandro', '1990-04-09', 1900, 2);

INSERT INTO colaborador(nome, data_nascimento, salario, organizacao_id) 
VALUES('Bruno', '1987-12-08', 1800, 1);

INSERT INTO colaborador(nome, data_nascimento, salario, organizacao_id) 
VALUES('Gustavo', '1995-10-17', 2000, 2);

--a) O nome da organização que foi fundada por ultimo

SELECT nome AS Organização_fundada_por_ultimo
FROM organizacao
WHERE data_fundacao = (SELECT MAX(data_fundacao) FROM organizacao);

--b) O nome do colaborador com salário maior

SELECT nome AS Colaborador_com_salário_maior
FROM colaborador
WHERE salario = (SELECT MAX(salario) FROM colaborador);

--c) O nome e data de nascimento dos colaboradores ordenada por salário, do maior para o menor

SELECT nome,data_nascimento
FROM colaborador
ORDER BY salario DESC;

--d) A idade dos colaboradoes

SELECT YEAR(CURDATE())-YEAR(data_nascimento) as Idade_dos_colaboradoes
FROM colaborador;
            
-- e) O nome dos colaboradores e da empresa que ele faz parte
            
SELECT c.nome AS colaborador, o.nome AS empresa
FROM colaborador c INNER JOIN organizacao o ON c.organizacao_id=o.id;
            
-- 2 - Escreva uma query que encontre a organização que paga o maior salário
            
SELECT o.nome AS organização_que_paga_o_maior_salário
FROM colaborador c INNER JOIN organizacao o ON c.organizacao_id=o.id
WHERE salario = (SELECT MAX(salario) FROM colaborador);
            
-- 3 - Escreva uma query que encontre a média de salários pagos por cada empresa
            
SELECT o.nome empresa,AVG(salario) média_de_salários
FROM colaborador c INNER JOIN organizacao o ON c.organizacao_id=o.id
GROUP BY o.id;
            
-- 4 - Escreva uma query que encontre a organização que tem o funcionário mais novo
            
SELECT f AS organização_que_tem_o_funcionário_mais_novo
FROM (
  SELECT o.nome AS f,MIN(YEAR(CURDATE())-YEAR(data_nascimento)) AS idade_do_funcionario
  FROM colaborador c INNER JOIN organizacao o ON c.organizacao_id=o.id
)AS query;
