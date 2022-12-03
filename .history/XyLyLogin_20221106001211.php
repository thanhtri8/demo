<?php
in
$email=$_POST['email'];
$password=$_POST[password_hash('password')];

foreach($data as $item)
{
    ?>
    
    <div><?php echo $item['MaDanhMucSanPham'] ?> - <?php echo $item['TenDanhMucSanPham'] ?>
    <a href="delete.php?id=<?php echo $item['MaDanhMucSanPham'] ?>">xoa</a>
    </div>
    <?php
}