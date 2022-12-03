<?php
 include_once "./ConnectDB.php";
$tenkh = isset($_POST['tenkh'])?$_POST['tenkh']:'';
$email = isset($_POST['email'])?$_POST['email']:'';
$tkhoan = isset($_POST['taikhoan'])?$_POST['taikhoan']:'';
$pass = isset($_POST['password'])?$_POST['password']:'';
$re = isset($_POST['repassword'])?$_POST['repassword']:'';
$sdt = isset($_POST['sdt'])?$_POST['']:'';

$role="U";
$sql = "insert into khachhang (maloai, tenloai) values('$m','$t')";

$connect->query($sql);

header('Location:login.php');