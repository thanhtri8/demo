<?php
 include_once "./ConnectDB.php";
 include_once "./Controller.php";

$email=$_POST['email'];
$password=$_POST[password_hash('password')];

foreach($data as $item)
{
   if($email==$item['email']&&)
}