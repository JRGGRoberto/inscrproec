# inscrproec

Necessário criar um arquivo www/db/config.php

Contendo as informações de conexão

    
    <?php
      $servername = "SERVIDOR DO BD";
      $username = "USERNAME";
      $password = "SENHA";
      $database = "NOME DA BASE DE DADOS";
    ?>
   
É importante que o banco de dados esteje com a seguinte configuração

    SET time_zone='America/Sao_Paulo';

O arquivo database.sql há a criação da base de dados e a criação das tabelas de "inscricao" e "professor".

Para evitar problemas de caracteres, definir o banco o os arquivos como UTF8, de qualquer forma para popular a tabela professor, execute o arquivo db/execsql.php
