<?php
 include_once "./ConnectDB.php";
if(isset($_POST['submit'])&& $_POST['submit'])
{
    $tenkh=isset($_POST['tenkh'])?$_POST['tenkh']:'';
    $email=isset($_POST['email'])?$_POST['email']:'';
    $taikhoan=isset($_POST['taikhoan'])?$_POST['taikhoan']:'';
    $pass=isset($_POST['password'])?$_POST['password']:'';
    $repass=isset($_POST['repassword'])?$_POST['repassword']:'';
    $sdt=isset($_POST['sdt'])?$_POST['sdt']:'';
    $diachi=isset($_POST['diachi'])?$_POST['tenkdiachih']:'';
    $role="U";

    $sql= "INSERT into khachhang (TenKhachHang,Email,TaiKhoan,MatKhau,SoDienThoai,DiaChi,RoleID) values (:tenkh,:email:,:taikhoan,:password,:repassword,:sdt,:diachi.'U')";

    $connect->prepare($sql);

    $data= [
        ':tenkh' => $tenkh,
        ':email' => $email,
        ':taikhoan' => $taikhoan,
        ':password' => $pass,
        ':repassword' => $repass,
        ':sdt' => $sdt,
        ':diachi' => $d,
        ':repassword' => $repass,
        
    ]
}   