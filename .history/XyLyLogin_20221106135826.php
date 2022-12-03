<?php
 include_once "./ConnectDB.php";


$sqlUser= "Select Email,MatKhau From khachhang";
$stm = $connect->query($sqlUser);
$data= $stm->FetchAll();


foreach($data as $item)
{
    ?>
    <div><?php echo $item['Email'] ?> <br> - <?php echo md5($item['MatKhau']) ?>
    <?php
}


if(isset($_POST['submit'])&& $_POST['submit'] && isset($_POST['email']) && isset($_POST['password']) )
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);
   
   
   if($email == $item['Email'] && $password == md5($item['MatKhau']))
   {
      
      header('Location:index.html');
   }
   else
   {
      $thongbao="Dang nhap khong thanh cong";
      header('Location:login.php');
   }
   
   
   
} else{
   $thongbao="Dang nhap khong thanh cong";
   header('Location:login.php');
}