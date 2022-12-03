<?php
include_once "./ConnectDB.php";


$sqlUser= "Select * From khachhang";
$sqlAdmin= "Select * From nhanvien";

$stm = $connect->query($sqlUser);
$stm1 = $connect->query($sqlAdmin);


$data= $stm->FetchAll(); 
$data1=$stm1->FetchAll();

?>



