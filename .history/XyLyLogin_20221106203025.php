<?php
 include_once "./ConnectDB.php";
 include_once "./Controller.php";
 foreach($data as $item)
 {
     ?>
     <div><?php echo $item['TaiKhoan'] ?> <br> - <?php echo $item['MatKhau'] ?> <br> - <?php echo $item['RoleId'] ?>
     <?php
 }
 