<?php
include_once "./ConnectDB.php";

// thuc thi sql
$sqlUser= "Select Email,MatKhau From khachhang";

//3.thuc thi sql, ket qua tra ve trong statement
$stm = $connect->query($sqlUser);

//4.xu ly ket qua

//PDO::FETCH_ASSOC: mang, PDO::FETCH_OBJ: DOI TUONG
$data= $stm->fetcn

?>



