<?php
 include_once "./ConnectDB.php";
   session_start();
if(isset($_POST['submit']))
{
   $email=isset($_POST['email']);
   $password=md5(isset($_POST['password']));
   
}

