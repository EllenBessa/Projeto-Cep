CREATE TABLE usuarios (
    id int AUTO_INCREMENT PRIMARY KEY,
      nome_usuario varchar(30) NOT NULL UNIQUE,
      nome varchar(100) NOT NULL,
      email varchar(80) NOT NULL UNIQUE,
      senha varchar(32) NOT NULL,
      turma varchar(4),
      cidade varchar(50),
      telefone varchar(20),
      nivel_acesso varchar(13) NOT NULL,
      avatar text,
      criado_em timestamp DEFAULT now(),
      atualizado_em timestamp DEFAULT now()
);

create table comentarios (
    id int AUTO_INCREMENT PRIMARY KEY,
    conteudo varchar(300) NOT NULL,
    data timestamp DEFAULT now(),
     id_usuario int NOT NULL,
    id_artigo int NOT NULL
);

CREATE TABLE artigos(
    id int AUTO_INCREMENT PRIMARY KEY,
      titulo varchar(30) NOT NULL,
      autor varchar(30) NOT NULL,
      descricao varchar(250) NOT NULL,
      conteudo text NOT NULL,
      categoria varchar(25) NOT NULL,
      data_publicacao timestamp,
      publico boolean NOT NULL,
    criado_em timestamp DEFAULT now(),
    ataulizado_em timestamp DEFAULT now()
);

ALTER TABLE comentarios ADD CONSTRAINT fk_usuario FOREIGN KEY ( id_usuario ) REFERENCES usuarios ( id );
ALTER TABLE comentarios ADD CONSTRAINT fk_artigo FOREIGN KEY ( id_artigo ) REFERENCES artigos ( id );