<?php
 include_once "./ConnectDB.php";
 include_once "./Controller.php";
if(isset($_POST['submit'])&& $_POST['submit'] && isset($_POST['email']) && isset($_POST['password']) )
{
   $email=$_POST['email'];
   $password=$_POST['password'];
   $passh = md5($password);
   
   if($email == $item['Email'] && $passh == md5( $item['MatKhau']))
   {
      header('Location:index.html');
   }
   else
   {
      header('Location:login.html');
   }
   
   
   
} else{
   header('Location:login.html');
}