<?php
 include_once "./ConnectDB.php";
$email  = isset($_POST[''])?$_POST['']:'';
$t = isset($_POST[''])?$_POST['']:'';
$t = isset($_POST[''])?$_POST['']:'';
$t = isset($_POST[''])?$_POST['']:'';
$t = isset($_POST[''])?$_POST['']:'';
$t = isset($_POST[''])?$_POST['']:'';

$role="U";
$sql = "insert into khachhang (maloai, tenloai) values('$m','$t')";

$connect->query($sql);

header('Location:index.p');