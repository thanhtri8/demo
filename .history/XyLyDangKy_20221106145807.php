<?php
 include_once "./ConnectDB.php";
$email = isset($_POST['MaDanhMucSanPham'])?$_POST['MaDanhMucSanPham']:'';
$t = isset($_POST['tenloai'])?$_POST['tenloai']:'';

$sql = "insert into loai (maloai, tenloai) values('$m','$t')";

$connect->query($sql);

header('Location:login.php');