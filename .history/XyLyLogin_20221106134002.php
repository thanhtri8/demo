<?php
 include_once "./ConnectDB.php";
 include_once "./Controller.php";
if(isset()&& $_POST['submit'])
$email=$_POST['email'];
$password=$_POST['password'];

$password = md5($password);



if($email==$stm['Email'] && $password == md5($stm['MatKhau']))
{
   header('Location:index.html');
}
else
{
   echo "Tên đăng nhập hoặc mật khẩu không đúng!";
   
}