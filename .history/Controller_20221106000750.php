<?php
include_once "./ConnectDB.php";

// thuc thi sql
$sqlUser= "Select * From khachhang";

//3.thuc thi sql, ket qua tra ve trong statement
$stm = $connect->query($sqlUser);

//4.xu ly ket qua

//PDO::FETCH_ASSOC: mang, PDO::FETCH_OBJ: DOI TUONG
$data= $stm->FETCH_ASSOC();
?>



<?php
//4.3: XU LY KET QUA DATA: SU DUNG VONG LAP DUYET QUA
foreach($data as $item)
{
    ?>
    
    <div><?php echo $item['MaDanhMucSanPham'] ?> - <?php echo $item['TenDanhMucSanPham'] ?>
    <a href="delete.php?id=<?php echo $item['MaDanhMucSanPham'] ?>">xoa</a>
    </div>
    <?php
}
