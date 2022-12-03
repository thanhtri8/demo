<?php
 include_once "./ConnectDB.php";
 include_once "./Controller.php";
 foreach($data as $item)
 {
     ?>
     <div><?php echo $item['TaiKhoan'] ?> <br> - <?php echo md5($item['MatKhau']) ?> <br> - <?php echo md5($item['RoleId']) ?>
     <?php
 }
 if(isset($_POST['submit'])&& $_POST['submit'])
 {
   if(isset($_POST['taikhoan']) && isset($_POST['password']))
   {
      $tk=$_POST['taikhoan'];
      $mk=$_POST['password'];
   }
   
   $mkh=md5($mk);

   if($tk == $item['TaiKhoan'] &&  $mkh == md5($item['MatKhau']))
   {
      header('Location:index.html');
      exit();
   }
   else
   {
      header('Location:login.php');
   }

 }
 else{
   header('Location:login.php');
 }