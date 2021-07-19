<?php

require_once 'config.php';

try {
  $conn= new mysqli($servername , $username, $password, $database ); 
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

} catch (mysqli_sql_exception $e) { 
  echo "E AA" . $e->getCode() . "<br />";
  echo "E BB" . $e->getMessage();
  exit(); 
}

?>