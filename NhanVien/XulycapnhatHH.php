<?php
  include("../Ketnoi.php");

    $maloai= $_POST['maloai'];
    $gia = $_POST['gia'];
    $quycach = $_POST['quycach'];
    $soluong = $_POST['soluong'];
    $n=0;
    $Tenhang = $_POST['tenhang'];
    $Tenhang = trim($Tenhang);
      $Tenhang =  ucfirst($Tenhang);
          $sql ="update HangHoa set TenHH='$Tenhang',QuyCach='$quycach',Gia='$gia',SoLuongHang='$soluong',MaLoaiHang='$maloai'";
        //  mysqli_query($conn, $sql);
          if(mysqli_query($conn, $sql))
              echo("Cập nhật thành công!");
          else
              echo("Thất bại!");


 ?>
