<?php
 include_once "./ConnectDB.php";
 include_once "./Controller.php"

 if(isset($_POST['submit'])&& $_POST['submit'])
 {
   if(isset($_POST['taikhoan']) && isset($_POST['password']))
   {
      $tk=$_POST['taikhoan'];
      $mk=$_POST['password']

   }
 }