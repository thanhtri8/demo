<?php
 include_once "./ConnectDB.php";
 $sqlUser= "Select Email,MatKhau From khachhang";
 $sqlAdmin= "Select TaiKhoan,MatKhau From nhanvien";
 $stm = $connect->query($sqlUser);
 $stm1 = $connect->query($sqlAdmin);
 $data= $stm->FetchAll();
 $data1= $stm1->FetchAll();
 
 foreach($data as $item)
 {
     ?>
     <div><?php echo $item['Email'] ?> <br> - <?php  md5($item['MatKhau']) ?>
     <?php
 }
 
 foreach($data1 as $item1)
 {
     ?>
     <div><?php echo $item1['TaiKhoan'] ?> <br> - <?php  md5($item1['MatKhau']) ?> - </div>

     <?php
 }
 
 
 if(isset($_POST['submit'])&& $_POST['submit'] && isset($_POST['email']) && isset($_POST['password']) )
 {
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $taikhoan = $_POST['email'];
    
    if($email == $item['Email'] && $password == md5($item['MatKhau']))
    {
       
       header('Location:index.html');
    }
    else if($taikhoan == $item1['TaiKhoan'] && $password == md5($item1['MatKhau']))
    {
 
       header('Location:category.html');
       
    }else {
       header('Location:login.php');
    }
 
    
    
    
 } else{
    header('Location:login.php');
 }

