<?php

  $sql = "select id, nome from professor"; 
  $result=$conn->query($sql);
  while($row = $result->fetch_assoc()) {    
    if ($row['nome']==$nome) {
      $selected = 'selected="selected"';
    }
    else {
      $selected = '';
    }   
         
    echo '<option value="'.$row['id'].'" '. $selected . '>'
            . $row['nome'] .'</option>';
  }


