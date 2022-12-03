<?php
 include_once "./ConnectDB.php";
 
 if(isset($_POST['submit'])&& $_POST['submit'])
 {
   if(isset($_POST['taikhoan']) && isset($_POST['password']))
   {
      $tk=$_POST['taikhoan'];
      $mk=$_POST['password'];
      
      $sql="SELECT * FROM khachhang WHERE TaiKhoan=? AND MatKhau=?";
      $stm=$connect->prepare($sql);
      $stm->execute(array($tk,$mk));
      $rs=$stm->fetch(PDO::FETCH_ASSOC);
      if($rs>0)
      {
         header('Location:index.html');
      }
      else{
         
      }
   }
   
 }else
 {
   header('Location:login.php');
 }