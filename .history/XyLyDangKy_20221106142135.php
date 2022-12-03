<?php
in
$m = isset($_POST['MaDanhMucSanPham'])?$_POST['MaDanhMucSanPham']:'';
$t = isset($_POST['tenloai'])?$_POST['tenloai']:'';

$sql = "insert into loai (maloai, tenloai) values('$m','$t')";

$connect->query($sql);

header('Location:index.php');