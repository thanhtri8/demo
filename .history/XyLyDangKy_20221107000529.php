<?php
 include_once "./ConnectDB.php";
if(isset($_POST['submit'])&& $_POST['submit'])
{
    $tenkh=isset($_POST['tenkh'])?$_POST['tenkh']:'';
    $email=isset($_POST['email'])?$_POST['email']:'';
    $taikhoan=isset($_POST['taikhoan'])?$_POST['taikhoan']:'';
    $pass=isset($_POST['tenkh'])?$_POST['tenkh']:'';
    $repass=isset($_POST['tenkh'])?$_POST['tenkh']:'';
    $sdt=isset($_POST['tenkh'])?$_POST['tenkh']:'';
    $diachi=isset($_POST['tenkh'])?$_POST['tenkh']:'';
}