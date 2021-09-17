<?php
  include("../Ketnoi.php");

    $maloai= $_POST['maloai'];
    $gia = $_POST['gia'];
    $quycach = $_POST['quycach'];
    $soluong = $_POST['soluong'];
    $n=0;
    $Tenhang = $_POST['tenhang'];
    $Tenhang = trim($Tenhang);
    $Tenhang1 = mb_strtolower($Tenhang, "utf8");
    $sql = "select TenHH from HangHoa";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query) != 0){
  //    $row = mysqli_fetch_array($query);
      while ($row = mysqli_fetch_array($query)) {
        if($Tenhang == mb_strtolower($row['TenHH'], "utf8")){
          echo("Giá trị đã tồn tại!");
          $n = "1";
          die();
        }
      }
    }

        if($n != "1"){
          $Tenhang =  ucfirst($Tenhang);
          $sql ="insert into HangHoa(TenHH,QuyCach,Gia,SoLuongHang,MaLoaiHang) values('$Tenhang','$quycach','$gia','$soluong','$maloai')";
        //  mysqli_query($conn, $sql);
          if(mysqli_query($conn, $sql))
              echo("Thêm thành công!");
          else
              echo("Lỗi hệ thống");

        }
 ?>
