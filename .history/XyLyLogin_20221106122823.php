<?php
 include_once "./ConnectDB.php";
 include_once "./Controller.php";

$email=$_POST['email'];
$password=$_POST['password'];


function login($email,$pass)
{
   foreach($data as $item)
   {
      if($email==$item['Email'] && $pass==$item['MatKhau'])
      {
         header('Location:index.html');
      }
      else
      {
         echo "dang nhap lai";
         header('Location:login.html');
      }
   }
}

login($email,$password);