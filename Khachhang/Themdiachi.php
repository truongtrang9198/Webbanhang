<?php
  include_once("Ketnoi.php");
  $makhach = $_POST['makhach'];
  $diachi = $_POST['diachi'];
  $sql = "insert into DiaChiKH(MSKH,DiaChi) values('$makhach','$diachi')";
  if(mysqli_query($conn,$sql)){
    echo "Thêm địa chỉ thành công!";
  }else
      echo "Thêm địa chỉ thất bại!";


 ?>
