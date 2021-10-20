<?php
  include_once("Ketnoi.php");
  session_start();
  $makhach = $_SESSION['MSKH'];
if(isset($_GET['mahang']) && isset($_GET['soluongmua'])){
    $mahang = $_GET['mahang'];
    $soluongmua = $_GET['soluongmua'];
    settype($soluongmua,"int");
    if(is_int($soluongmua)==False || $soluongmua==0 || ($soluongmua < 0)){
      echo "Số lượng không hợp lệ!";
      die();
    }
    $sql ="select SoLuongHang from HangHoa where MSHH='$mahang'";
    if(mysqli_query($conn,$sql)){
      $row = mysqli_fetch_array(mysqli_query($conn,$sql));
      if(($soluongmua > $row['SoLuongHang']) ){
         echo "Trong kho chỉ còn ".$row['SoLuongHang']." sản phẩm";
         die();
      }
    }

    $sql = "update Giohang_temp set Soluong = '$soluongmua' where MSHH = '$mahang' and MSKH='$makhach'";
    if(mysqli_query($conn, $sql)){
      echo "True";
    }
} else {
  echo "Thất bại!";}

 ?>
