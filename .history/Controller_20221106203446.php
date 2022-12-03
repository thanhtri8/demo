<?php
include_once "./ConnectDB.php";

// thuc thi sql
$sqlUser= "Select * From khachhang";
$sqlAdmin= "Select * From nhanvien";
//3.thuc thi sql, ket qua tra ve trong statement
$stm = $connect->query($sqlUser);
$stm1 = $connect->query($sqlAdmin);

//4.xu ly ket qua

//PDO::FETCH_ASSOC: mang, PDO::FETCH_OBJ: DOI TUONG
$data= $stm->FetchAll(); 
$data1=$stm->FetchAll();

?>



