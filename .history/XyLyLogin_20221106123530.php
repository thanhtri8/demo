<?php
 include_once "./ConnectDB.php";
 include_once "./Controller.php";

$email=$_POST['email'];
$password=$_POST['password'];

if (!$email || !$password) {
echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
}
foreach($data as $item)
{
   if($email==$item['Email'] && $password==$item['MatKhau'])
   {
      header('Location:index.html');
   }
   else
   {
      echo "Tên đăng nhập hoặc mật khẩu không đúng!";
      
   }
}
