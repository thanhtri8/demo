<?php
 include_once "./ConnectDB.php";
 include_once "./Controller.php";
 foreach($data as $item)
 {
     ?>
     <div><?php echo $item['TaiKhoan'] ?> <br> - <?php echo md5($item['MatKhau']) ?> <br> - <?php echo($item['RoleID']); 
    ?></div>
     <?php
 }

 foreach($data1 as $item1)
{
    ?>
    <div><?php echo $item1['TaiKhoan'] ?> <br> - <?php echo md5($item1['MatKhau']) ?> <br> - <?php echo $item1['RoleID']; 
    ?></div>
    <?php
}
//if(isset($_POST['submit'])&& $_POST['submit'])
 {
   if(isset($_POST['taikhoan']) && isset($_POST['password']))
   {
      $tk=$_POST['taikhoan'];
      $mk=$_POST['password'];
   }
   else{
      header('Location:login.php');
   }
   
   $mkh=md5($mk);
   $role=$item['RoleID'];
   if($tk == $item['TaiKhoan'] &&  $mkh == md5($item['MatKhau']) || $tk == $item1['TaiKhoan'] &&  $mkh == md5($item1['MatKhau']))
   {
      if($item['RoleID'] ="U")
      {
         header('Location:index.html');
      }else{
         header('Location:DangKy.php');
      }
      
      
   }
   else
   {
      header('Location:login.php');
   }

 }
 else{
   header('Location:login.php');
 }