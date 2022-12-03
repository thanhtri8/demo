<?php
 include_once "./ConnectDB.php";
 include_once "./Controller.php";

$email=$_POST['email'];
$password=$_POST[pas];

foreach($data as $item)
{
   if($email==$item['Email']&&$password==$item['MatKhau'])
   {
      header('Location:index.html');
   }
   else
   {
      echo "dang nhap lai";
      header('Location:login.html');
   }
}