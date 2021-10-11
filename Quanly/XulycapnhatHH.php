<?php
  include("Ketnoi.php");
    $mahang = $_GET['mahang'];
    $gia = $_GET['gia'];
    $quycach = $_GET['quycach'];
    $soluong = $_GET['soluong'];
    $n=0;
    $Tenhang = $_GET['tenhang'];
    $Tenhang = trim($Tenhang);
      $Tenhang =  ucfirst($Tenhang);
          $sql ="update HangHoa set TenHH='$Tenhang',QuyCach='$quycach',Gia='$gia',SoLuongHang='$soluong' where MSHH='$mahang'";
        //  mysqli_query($conn, $sql);
          if(mysqli_query($conn, $sql)){
            header("Location:index.php?action=quanlyhh");
          }

          else
              echo("Thất bại!");


 ?>
