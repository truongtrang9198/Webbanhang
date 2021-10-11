<?php
  include('Ketnoi.php');
  if(isset($_POST['mahang']) && isset($_POST['maloai'])){
    $mahang = $_POST['mahang'];
    $maloai = $_POST['maloai'];
    $sql = "update HangHoa set MaLoaiHang = '$maloai' where MSHH = '$mahang'";
    if(mysqli_query($conn, $sql)){
      echo "Cập nhật thành công!";
    }else{
      echo "Thất bại!";}
  }else{
    echo "Không nhận được dữ liệu!";
  }




 ?>
