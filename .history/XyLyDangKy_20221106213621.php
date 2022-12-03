<?php
 include_once "./ConnectDB.php";
$tenkh = isset($_POST['tenkh'])?$_POST['tenkh']:'';
$t = isset($_POST[''])?$_POST['']:'';
$t = isset($_POST[''])?$_POST['']:'';
$t = isset($_POST[''])?$_POST['']:'';
$t = isset($_POST[''])?$_POST['']:'';
$t = isset($_POST[''])?$_POST['']:'';

$role="U";
$sql = "insert into khachhang (maloai, tenloai) values('$m','$t')";

$connect->query($sql);

header('Location:login.php');