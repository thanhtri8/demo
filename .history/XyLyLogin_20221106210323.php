<?php
 include_once "./ConnectDB.php";
 include_once "./Controller.php";
 foreach($data as $item)
 {
     ?>
     <div><?php echo $item['TaiKhoan'] ?> <br> - <?php echo md5($item['MatKhau']) ?> <br> - <?php $index = array_search($item1['RoleId'], $your_array);

var_dump(  $your_array[$index]  );; 
    ?></div>
     <?php
 }

 foreach($data1 as $item1)
{
    ?>
    <div><?php echo $item1['TaiKhoan'] ?> <br> - <?php echo md5($item1['MatKhau']) ?> <br> - <?php $item1['RoleId']; 
    ?></div>
    <?php
}
