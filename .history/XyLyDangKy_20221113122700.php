<?php
 include_once "./ConnectDB.php";
if(isset($_POST['DangKy']))
{
    $tenkh=isset($_POST['tenkh'])?$_POST['tenkh']:'';
    $email=isset($_POST['email'])?$_POST['email']:'';
    $taikhoan=isset($_POST['taikhoan'])?$_POST['taikhoan']:'';
    $pass=isset($_POST['password'])?$_POST['password']:'';
    $repass=isset($_POST['repassword'])?$_POST['repassword']:'';
    $sdt=isset($_POST['sdt'])?$_POST['sdt']:'';
    $diachi=isset($_POST['diachi'])?$_POST['tenkdiachih']:'';
    $role="U";

   
}   
$sql= "INSERT into khachhang(TenKhachHang,Email,TaiKhoan,MatKhau,SoDienThoai,DiaChi,RoleID) values (:tenkh,:email:,:taikhoan,:password,:sdt,:diachi.'U')";

    
$stm=$connect->prepare($sql);

$data= [
    ':TenKhachHang' => $tenkh,
    ':Email' => $email,
    $taikhoan,
     $pass,
     $sdt,
     $diachi,
    $RoleID,
];
$rs=$stm->exec($data);