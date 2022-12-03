<?php
 include_once "./ConnectDB.php";
 echo $_POST
if(isset($_POST['DangKy']))
{
    echo$tenkh=isset($_POST['tenkh'])?$_POST['tenkh']:'';
    echo$email=isset($_POST['email'])?$_POST['email']:'';
    echo$taikhoan=isset($_POST['taikhoan'])?$_POST['taikhoan']:'';
    echo$pass=isset($_POST['password'])?$_POST['password']:'';
    echo$repass=isset($_POST['repassword'])?$_POST['repassword']:'';
    echo$sdt=isset($_POST['sdt'])?$_POST['sdt']:'';
    echo$diachi=isset($_POST['diachi'])?$_POST['tenkdiachih']:'';
    echo$role="U";
    $sql= "INSERT into khachhang(TenKhachHang,Email,TaiKhoan,MatKhau,SoDienThoai,DiaChi,RoleID) values ($tenkh,$email,$taikhoan,$pass,$sdt,$diachi, $role)";

    
$stm=$connect->prepare($sql);

$data= $stm->bindParam([
    'TenKhachHang' => $tenkh,
    'Email' => $email,
    'TaiKhoan' => $taikhoan,
    'MatKhau' => $pass,
    'SoDienThoai' => $sdt,
    'DiaChi' => $diachi,
    'RoleID' => $role,
]);
$rs=$stm->execute($data);
   
}   
