<?php
 include_once "./ConnectDB.php";
   session_start();
if(isset($_POST['submit']))
{
   $email= isset($_POST['email']);
   $password= md5(isset($_POST['password']));

   $sqlUser= "Select Email,MatKhau From khachhang where Email=$email,MatKhau=$password";
   $stm = $connect->query($sqlUser);
   $data= $stm->FetchAll($sqlUser);

   if($email == 1 && $password == 1)
   {
      header('Location:index.html');
   }else{
      header('Location:login.php');
   }

}

