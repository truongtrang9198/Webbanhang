<?php
  include("Ketnoi.php");
  if(isset($_GET['maloai'])){
    $maloai = $_GET['maloai'];
    $sql = "delete from LoaiHangHoa where MaLoaiHang = $maloai";
    if(mysqli_query($conn,$sql)){
      echo("Xóa thành công!");
    }else{
        echo "Thất bại";
    }
  }else {
    echo "không nhận được dữ liệu!";
  }
 ?>
