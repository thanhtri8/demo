<?php
include_once "./ConnectDB.php";

// thuc thi sql
$sqlUser= "Select * From khachhang";
//3.thuc thi sql, ket qua tra ve trong statement
$stm = $connect->query($sql);

//4.xu ly ket qua
//4.1/ lay so dong tra ve
$n = $stm->rowCount();


//4.2 lay tat ca du lieu tra ve, them nhieu dinh dang khac nhau
echo "<h1> co $n loai</h1>";
//PDO::FETCH_ASSOC: mang, PDO::FETCH_OBJ: DOI TUONG
$data= $stm->fetchAll();
?>
 <a href="create.html">them
</a> 


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
