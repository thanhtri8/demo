<?php
include_once "./ConnectDB.php";

// thuc thi sql
$sqlUser= "Select * From khachhang";

//3.thuc thi sql, ket qua tra ve trong statement
$stm = $connect->query($sqlUser);

//4.xu ly ket qua
$n = $stm->rowCount();
//PDO::FETCH_ASSOC: mang, PDO::FETCH_OBJ: DOI TUONG
$data= $stm->FetchAll();    
foreach($data as $item)
{
    ?>
    <div><?php echo $item['Email'] ?> <br> - <?php echo $item['MatKhau'] ?> <br> - <?php echo $item['RoleId'] ?
    <?php
}
?>



