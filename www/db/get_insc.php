<?php

  $sql = "select i.id, i.nome, " 
    ."DATE_FORMAT( i.created_at, '%d/%m/%Y' ) as dat, p.nome as prof, "
    ." i.curso_id as curso "
  ." from inscricao i "
  ." inner join professor p on i.prof_id = p.id "
  ." where i.id = '$id' "; 
  $result=$conn->query($sql);
  while($row = $result->fetch_assoc()) {    
    $insc = $row['id'];
    $nomec =  $row['nome'];
    $datc = $row['dat'];
    $profc = $row['prof'];
    $cursoc = $row['curso'];
  }