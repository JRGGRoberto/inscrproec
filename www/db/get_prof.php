<?php

  $sql = "select nome from professor where id = '$prof' "; 
  $result=$conn->query($sql);
  while($row = $result->fetch_assoc()) {    
    echo $row['nome']; 
  }