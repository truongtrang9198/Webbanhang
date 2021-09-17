<?php
  include("Ketnoi.php");

    $maloai= $_GET['maloai'];
    $gia = $_GET['gia'];
    $quycach = $_GET['quycach'];
    $soluong = $_GET['soluong'];
    $n=0;
    $Tenhang = $_GET['tenhang'];
    $Tenhang = trim($Tenhang);
      $Tenhang =  ucfirst($Tenhang);
          $sql ="update HangHoa set TenHH='$Tenhang',QuyCach='$quycach',Gia='$gia',SoLuongHang='$soluong',MaLoaiHang='$maloai'";
        //  mysqli_query($conn, $sql);
          if(mysqli_query($conn, $sql)){
            header("Location:index.php?action=quanlyhh");
          }

          else
              echo("Thất bại!");


 ?>
