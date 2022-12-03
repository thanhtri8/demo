<?php
 include_once "./ConnectDB.php";
 include_once "./Controller.php";
if(isset($_POST['submit'])&& $_POST['submit'] && isset($_POST['email']))
{
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password = md5($password);
   
   if($email == $item['Email'])
   {

   }
   
   
   
} else{

}