<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROEC/UNESPAR</title>
  <link rel="stylesheet" href="style2.css">
  <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <script type="text/javascript">
    $("#tel1, #tel2").mask("(00) 0000-00009");
    $("#cpf").mask("000.000.000-00");
    $("#cep").mask("00000-000");
    $("#rg").mask("00000000-099");
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
<?php

$id = $nome = $rg = $cpf = $dt_nasc = $ender = $bairro =
 $cidade = $estados = $cep = $tel1 = $orgao1 =
 $tel2 = $email = $curso = $serie = $prof = $bolsa = $orgao = $orgao1 = $address = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = test_input($_POST["id"]);
  $orgao = test_input($_POST["orgao"]);
  $orgao1 = test_input($_POST["orgao1"]);
  $nome = test_input($_POST["nome"]);
  $rg = test_input($_POST["rg"]);
  $cpf = test_input($_POST["cpf"]);
  $dt_nasc = test_input($_POST["dt_nasc"]);
  $ender = test_input($_POST["ender"]);
  $bairro = test_input($_POST["bairro"]);
  $cidade = test_input($_POST["cidade"]);
  $estados = test_input($_POST["estados"]);
  $cep = test_input($_POST["cep"]);
  $tel1 = test_input($_POST["tel1"]);
  $tel2 = test_input($_POST["tel2"]);
  $email = test_input($_POST["email"]);
  $curso = test_input($_POST["curso"]);
  $serie = test_input($_POST["serie"]);
  $prof = test_input($_POST["prof"]);
  $bolsa = test_input($_POST["bolsa"]);
  $address =  test_input($_POST["address"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

require_once 'db/conn.php';

include_once 'db/get_insc.php';

if($cursoc <> NULL){
  ?>

<h1>Sua inscrição já foi realizada</h1>
<br>
<p>Código de inscrição: <span class="cod_insc"><?php echo $insc; ?></span></p>
<p>Nome: <span class="cod_insc"><?php echo $nomec; ?></span></p>
<p>Professor: <span class="cod_insc"><?php echo $profc; ?></span></p>
<p>Curso: <span class="cod_insc"><?php echo $cursoc; ?></span></p>
<p>Processo realizado em: <span class="cod_insc"><?php echo $datc; ?></span></p>

<section>
    <div class="center">
      <p>Acompanhe o processo conforme o Edital Convênio UNESPAR/FUNDAÇÃO ARAUCÁRIA, Chamada 002/2001 - PRÓ-Reitoria de Extensão e Cultura.</p>
    </div>
</section>

<?php
}
elseif(($orgao1 + $orgao) == 321) {
  $anyError = 0;
  
  $pasta = "./uploads/";
  
  $cpf_ok_file = false;
  $cpffile = "c_".$id;
  $extCPF = strtolower(pathinfo($_FILES["anex_cpf"]["name"], PATHINFO_EXTENSION));
  $tmpCPF = $_FILES["anex_cpf"]["tmp_name"];
  $cpffile = $cpffile.".$extCPF";
  
  $cpf_ok_file = move_uploaded_file($tmpCPF, $pasta.$cpffile);
  
  $rg_ok_file = false;
  $rgfile = "r_".$id;
  $extRG = strtolower(pathinfo($_FILES["anex_rg"]["name"], PATHINFO_EXTENSION));
  $tmpRG = $_FILES["anex_rg"]["tmp_name"];
  $rgfile = $rgfile.".$extRG";
  
  $rg_ok_file = move_uploaded_file($tmpRG, $pasta.$rgfile);
  
  $sql_insert = "INSERT INTO inscricao
    ( id, nome, rg, cpf, dt_nasc, ender, bairro, cidade, estados, cep, 
    tel1, tel2, email, curso_id, serie, prof_id, bolsa, rg_img, cpf_img, ip_address)
    VALUES
    (  '$id', '$nome', '$rg', '$cpf', '$dt_nasc', '$ender', '$bairro', 
       '$cidade',  '$estados', '$cep', '$tel1', '$tel2', '$email', 
       '$curso', '$serie', '$prof', '$bolsa', '$rgfile', '$cpffile', '$address'
    )";
    
  if ($conn->query($sql_insert) === TRUE) {

  } else {
    echo "Error: " . $$sql_insert . "<br>" . $conn->error;
  }

?>

<section>
<div class="center">
  <h1>Código de inscrição: <span class="cod_insc"><?php echo $id; ?></span></h1>
  <div class="dados">   
    
    <table class="tbdados">
      <caption>Dados pessoais</caption>
      <tr>
        <th>Campos</th>
        <th>Registrado</th>
      </tr>
      <tr>
        <td>Nome</td>
        <td><?php echo $nome; ?></td>
      </tr>
      <tr>
       <td>RG</td>
       <td><?php 
          echo $rg;
          if($rg_ok_file) {
            echo " &nbsp;  &nbsp; <a href='/uploads/$rgfile' download='$rg'>"
            ."<i class='fas fa-address-card' style='font-size:24px; color:#0f954f'></i>"
            ."</a>";
          } else {
            echo 'Error';
          }
          ?>
        </td>
      </tr>
      <tr>
       <td>CPF</td>
       <td> <?php 
          echo $cpf; 
          if($cpf_ok_file) {
            echo " &nbsp;  &nbsp; <a href='/uploads/$cpffile' download='$cpf'>"
            ."<i class='fas fa-address-card' style='font-size:24px; color:#2235C4'></i>"
            ."</a>";
          } else {
            echo 'Error';
          }
         ?></td>
      </tr>
      <tr>
       <td>Dt Nasc</td>
        <td><?php echo $dt_nasc; ?></td>
      </tr>
    </table>


   <table class="tbdados">
      <tr>
        <th>Campos</th>
        <th>Registrado</th>
      </tr>
     <caption>Endereço</caption>
     <tr>
       <td>Endereço</td>
       <td><?php echo $ender; ?></td>
     </tr>
     <tr>
       <td>Bairro</td>
       <td><?php echo $bairro; ?></td>
     </tr>
     <tr>
       <td>Cidade</td>
       <td><?php echo $cidade; ?></td>
     </tr>
     <tr>
       <td>Estado</td>
       <td><?php echo $estados; ?></td>
     </tr>
     <tr>
       <td>CEP</td>
       <td><?php echo $cep; ?></td>
     </tr>
   </table>


    <table class="tbdados">
      <caption>Contatos</caption>
      <tr>
        <th>Campos</th>
        <th>Registrado</th>
      </tr>
     <tr>
       <td>Telefone</td>
       <td> <?php echo $tel1; ?></td>
     </tr>
     <tr>
       <td>Telefone</td>
       <td><?php echo $tel2; ?></td>
     </tr>
     <tr>
       <td>Email</td>
       <td><?php echo $email; ?></td>
     </tr>
    </table> 

    <table class="tbdados">
     <caption>Informações acadêmicas</caption>
     <tr>
        <th>Campos</th>
        <th>Registrado</th>
      </tr>
     <tr>
       <td>Curso</td>
       <td> <?php echo $curso; ?></td>
     </tr>
     <tr>
       <td>Série</td>
       <td><?php echo $serie; ?></td>
     </tr>
     <tr>
       <td>Professor(a)</td>
       <td>
         <?php 
           include_once 'db/get_prof.php';
         ?>
        </td>
     </tr>
     <tr>
       <td>Programa</td>
       <td><?php echo $bolsa; ?></td>
     </tr>
   </table> 

   
  </div>
</div>
</section>

<?php
  $conn->close();

} else {
  echo "loading...";
  ?>
  <script>
      window.location.href='https://proec.unespar.edu.br/';
    </script>
  <?php
}

?> 

</section>
<footer>
    <div class="flex-banner">
      <div class="flex-item-left"><div class="endereco"><b>© Universidade Estadual do Paraná</b><br>
            Av. Minas Gerais, 5021<br>
            Apucarana - Paraná - Brasil - 86813-250 <br>
            Fone: (43) 3420-5700 | Fax: (43) 3420-5710</div></div>
      <div class="flex-item-right"><a href="http://www.pr.gov.br" target="_blank"><img src="https://www.unespar.edu.br/++theme++tema-unespar-plone/img/governo-pr.png" title="Governo do Paraná" alt="Governo do Paraná"></a></div>
    </div>
    <p class="msg-rodape">Feito pelo programa de bolsa de extensão UNESOPAR - JRGG</p>
  </footer>
  <?php 
  $conn->close();
  ?>
</body>
</html>