<?php

try {
    $connect = new PDO('mysql:host=localhost:3306;dbname=shoes','root','');
    // set the PDO error mode to exception
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
$connect = new PDO('mysql:host=localhost:3306;dbname=shoes','root','');