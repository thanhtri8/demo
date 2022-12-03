<?php
 include_once "./ConnectDB.php";

// thuc thi sql
$sqlUser= "Select Email,MatKhau From khachhang";

//3.thuc thi sql, ket qua tra ve trong statement
$stm = $connect->query($sqlUser);

//4.xu ly ket qua

//PDO::FETCH_ASSOC: mang, PDO::FETCH_OBJ: DOI TUONG
$data= $stm->FetchAll();    
foreach($data as $item)
{
    ?>
    <div><?php echo $item['Email'] ?> <br> - <?php echo $item['MatKhau'] ?>
    <?php
}


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