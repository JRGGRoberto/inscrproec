<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROEC/UNESPAR</title>
  <link rel="stylesheet" href="style2.css">
  <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <script type="text/javascript">
    $("#tel1, #tel2").mask("(00) 0000-00009");
    $("#cpf").mask("000.000.000-00");
    $("#cep").mask("00000-000");

  </script>
</head>

<body>
  <header>
    <p class="bartop"></p>
    <div class="superior_logo"><img src="img/logo.png" alt="PROEC" class="log_proec">
    </div>
  </header>
  <section><p class="msg-rodape">Inscrição ao edital 002/2021 - PROEC/UNESPAR</p></section>

  <section>
    <div class="center">
      <h1>EDITAL 002/2021 – PROEC/UNESPAR</h1>
      <p>Programa Institucional Pró-Extensão das IES ESTADUAIS</p>
    </div>
  </section>

  <section>
    <div class="center">
      <p>Tendo em vista a abertura de inscrição para discente conforme o Edital Convênio UNESPAR/FUNDAÇÃO ARAUCÁRIA, Chamada 002/2001 - PRÓ-Reitoria de Extensão e Cultura, venho pelo presente instrumento REQUERER a minha inscrição no referido processo de seleção, juntando para tanto a documentação estabelecida em edital.</p>
    </div>
  </section>

  <section>
    <div class="center">
      <form action="senddata.php" method="post" enctype="multipart/form-data" >
        <fieldset name="identification">
          <legend>Ficha de inscrição</legend>
    
          <fieldset name="dadospessoais">
            <legend>Dados pessoais</legend>
    
            <div class="line">
              <label for="nome">Nome</label>
              <input 
                type="text" name="nome" id="nome"
                maxlength="40"
                size="40"
                required>
            </div>
            
            <div class="line">
              <label for="rg">RG</label>
              <input type="text" name="rg" id="rg" style="width:155px;"required>
            </div>
    
            <div class="line">
              <label for="cpf">CPF</label>
              <input class="info" type="text" name="cpf" id="cpf" maxlength="16"
              placeholder="000.000.000-00" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}"
              style="width:110px;"
              required> 
            </div>
    
            <div class="line">
              <label for="dt_nasc">Dt. de nasc.</label>
              <input type="date" name="dt_nasc" id="dt_nasc" 
              min="1951-01-01" max="2007-01-01"
              style="width:140px;" required>
            </div>
    
          </fieldset>

          <input type="hidden" id="orgao" name="orgao" value="314">
          <input type="hidden" name="id" id="id" value="
          <?php 
            $id = bin2hex(random_bytes(8)); echo $id;
          ?>" >
          
          <fieldset>
            <legend>Endereço</legend>
            <div class="line">
              <label for="ender">Endereço</label>
              <input type="text" name="ender" id="ender" style="width:180px;" 
                maxlength="40" size="30" required>
            </div>
           
            <div class="line">
              <label for="bairro">Bairro</label>
              <input type="text" name="bairro" id="bairro" style="width:120px;"  required>
            </div>
    
            <div class="line">
              <label for="cidade">Cidade</label>
              <input type="text" name="cidade" id="cidade" required>
            </div>
    
            <div class="line">
          <label for="estados">Estado</label>
            <select name="estados" id="estados" required>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR" selected>PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
          </select>
            </div>
    
            <div class="line">
              <label for="cep">CEP</label>
              <input type="text" name="cep" id="cep" 
              maxlength=9 minlength=9 style="width:77px;" 
              placeholder="00000-000" pattern="[0-9]{5}-[0-9]{3}"
              required>
              <input type="hidden" id="orgao1" name="orgao1" value="7">
            </div>
    
          </fieldset> 
          
          <fieldset>
            <legend>Contatos</legend>
    
            <div class="line">
              <label for="tel1">Telefone</label>
              <input type="tel" 
                pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}"
                placeholder="(00) 0000-00009"
                name="tel1" id="tel1" required>
            </div>
            
            <div class="line">
              <label for="tel2">Telefone</label>
              <input type="tel" 
              pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}"
                placeholder="(00) 0000-00009"
                name="tel2" id="tel2">
            </div>
    
            <div class="line">
              <label for="email">E-mail</label>
              <input type="email" name="email" id="email" maxlength="40"
                size="40"  placeholder="seuemail@domain.com.br" required/>
            </div>
    
          </fieldset>
    
          <fieldset>
            <legend>Informações acadêmicas</legend>
    
            <div class="line">
              <label for="curso">Curso</label>
              <input 
                type="text" name="curso" id="curso"
                maxlength="40"
                size="40"
                required>
              </div>
      
              <div class="line">
                <label for="serie">Série</label>
                <input 
                  type="number" min="1"
                  name="serie" id="serie" 
                  style="width:50px;"
                  required/>
              </div>
      
      
              <div class="line">
                <label for="prof">Professor(a)</label>
                 
                <select name="prof" id="prof"  required style="width:350px;">
                  <option value="-1"></option>
                  <?php 
                    require_once 'db/conn.php';
                    include_once 'db/get_profs.php';
                    $conn->close();
                  ?>
                </select>
                <input type="hidden" name="address" id="address" value="<?php
                  if(!empty($_SERVER['HTTP_CLIENT_IP'])){
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                  }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                  }else{
                    $ip = $_SERVER['REMOTE_ADDR'];
                  }
                  echo $ip;
                ?>" >
              </div>
              
        
          </fieldset>
            
          <fieldset>
              <legend>Programa de bolsa</legend>
    
              <label for="pibex">PIBEX</label>
              <input type="radio" name="bolsa" id="pibex" value="PIBEX" required>
    
              <label for="pibis">PIBIS</label>
              <input type="radio" name="bolsa" id="pibis" value="PIBIS">

            </fieldset>
    
          <fieldset>
            <legend>Anexos</legend>
            <label for="anex_rg">Foto do RG</label>
            <input 
              type="file" 
              name="anex_rg" id="anex_rg"
              required 
              accept="image/*, application/pdf, application/msword, .docx,
              application/vnd.openxmlformats-officedocument.wordprocessingml.document">
              
            <br>
            <label for="anex_cpf">Foto do CPF</label>
            <input 
              type="file" 
              name="anex_cpf" id="anex_cpf"
              required 
              accept="image/*, application/pdf, application/msword, .docx,
              application/vnd.openxmlformats-officedocument.wordprocessingml.document"> 
              
              <span class="tipos">Extensões aceitas [*.doc, *.docx, *.pdf, *.jpg, *.png]</span>
          </fieldset>
    
            <div class="btns">
              <button type="submit">Enviar</button>
              <button type="reset">Limpar</button>
            </div>
        </fieldset>
      </form>
    </div>
  </section>

  
  <footer>
    <div class="flex-banner">
      <div class="flex-item-left"><div class="endereco"><b>© PROEC - Pró-Reitoria de Extensão e Cultura</b><br>
      Escritório da Reitoria Unespar - Universidade Estadual do Paraná<br>
      Avenida Professor Lothário Meissner, 350, Jardim Botânico<br>
      Cep: 80210-170 - Curitiba - PR<br>
      Fone: (41) 3017-2072
      </div>
      </div>
      <div class="flex-item-right"><a href="http://www.pr.gov.br" target="_blank"><img src="https://www.unespar.edu.br/++theme++tema-unespar-plone/img/governo-pr.png" title="Governo do Paraná" alt="Governo do Paraná"></a></div>
    </div>
    <p class="msg-rodape">Feito pelo programa de bolsa de extensão UNESOPAR - JRGG</p>
  </footer>
</body>
</html>


