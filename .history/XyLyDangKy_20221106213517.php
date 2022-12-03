<?php
 include_once "./ConnectDB.php";
$email  = isset($_POST[''])?$_POST['']:'';
$t = isset($_POST[''])?$_POST['']:'';
$t = isset($_POST[''])?$_POST['']:'';
$t = isset($_POST[''])?$_POST['']:'';
$t = isset($_POST[''])?$_POST['']:'';
$t = isset($_POST[''])?$_POST['']:'';

$role=""
$sql = "insert into khachhang (maloai, tenloai) values('$m','$t')";

$connect->query($sql);

header('Location:login.php');