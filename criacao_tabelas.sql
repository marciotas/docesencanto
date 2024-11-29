<!-- Criado por: Marcio Tascheck -->
<!-- Data de Criação: 25/11/2024 -->
<!-- E-mail: marciotascheck8@gmail.com -->


CREATE TABLE reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    data_reserva DATE NOT NULL,
    hora_reserva TIME NOT NULL,
    numero_pessoas INT NOT NULL,
    mensagem TEXT,            
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

select * from reservas;
drop table reservas;

CREATE TABLE contato (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    assunto VARCHAR(150) NOT NULL,
    mensagem TEXT NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
    
select * from contato;
drop table contato;
