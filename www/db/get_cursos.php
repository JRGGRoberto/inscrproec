<?php

  require_once 'conn.php';
  $sql = "select id, nome from gaarea"; 
  $result=$conn->query($sql);
  while($row = $result->fetch_assoc()) {         
    echo '<option value="'.$row['id'].'" '. $selected . '>'
            . $row['nome'] .'</option>';
  }


