<?php
 include_once "./ConnectDB.php";
 include_once "./Controller.php";

$email=$_POST['email'];
$password=$_POST['password'];

$password = md5($password);



if($email==$data['Email'] && $password == md5($data['MatKhau']))
{
   header('Location:index.html');
}
else
{
   echo "Tên đăng nhập hoặc mật khẩu không đúng!";
   
}