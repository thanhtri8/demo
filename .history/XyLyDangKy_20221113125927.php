<?php
 include_once "./ConnectDB.php";
 
if(isset($_POST['sub']))
{
    
    echo($tenkh=isset($_POST['tenkh'])?$_POST['tenkh']:'');
    echo $email=isset($_POST['email'])?$_POST['email']:'';
    echo $taikhoan=isset($_POST['taikhoan'])?$_POST['taikhoan']:'';
    echo $pass=isset($_POST['password'])?$_POST['password']:'';
    echo $repass=isset($_POST['repassword'])?$_POST['repassword']:'';
    echo $sdt=isset($_POST['sdt'])?$_POST['sdt']:'';
    echo $diachi=isset($_POST['diachi'])?$_POST['diachi']:'';
    echo $role="U";
   $sql= "INSERT into khachhang(TenKhachHang,Email,TaiKhoan,MatKhau,SoDienThoai,DiaChi,RoleID) values ($tenkh,$email,$taikhoan,$pass,$sdt,$diachi, $role)";
    $connect
    

    
}   
