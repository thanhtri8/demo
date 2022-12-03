<?php
 include_once "./ConnectDB.php";
   session_start();
if(isset($_POST['submit']))
{
   $email= isset($_POST['email']);
   $password= md5(isset($_POST['password']));

   $sqlUser= "Select Email,MatKhau From khachhang where Email=$email,MatKhau=$password";
   $stm = $connect->query($sqlUser);
   $data= $stm->FETCH_ASSOC();
   foreach($data as $item)
   {
    ?>
    <div><?php echo $item['Email'] ?> <br> - <?php  md5($item['MatKhau']) ?>
    <?php
   }

   if($email == $data['Email'] && $password == $data['MatKhau'])
   {
      header('Location:index.html');
   }else{
      header('Location:login.php');
   }

}

