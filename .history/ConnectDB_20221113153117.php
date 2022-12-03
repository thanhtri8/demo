<?php

try {
    $connect = new PDO('mysql:host=localhost:3306;dbname=shoes','root','');
    // set the PDO error mode to exception
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->query('set names utf8');
    echo "connect thanh cong"
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
