<?php
include_once "./ConnectDB.php";

// thuc thi sql
$sqlUser= "Select * From khachhang";

//3.thuc thi sql, ket qua tra ve trong statement
$stm = $connect->query($sqlUser);

//4.xu ly ket qua

//PDO::FETCH_ASSOC: mang, PDO::FETCH_OBJ: DOI TUONG
$data= $stm->fetchAll();
foreach($data as $item)
{
   if($email==$item['Email'] && $password==$item['MatKhau'])
   {
      header('Location:index.html');
   }
   else
   {
      echo "Tên đăng nhập hoặc mật khẩu không đúng!";
      
   }
}

?>



