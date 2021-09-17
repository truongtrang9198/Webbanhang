<?php
  include("Ketnoi.php");
  if(isset($_GET['Tenloai'])){
    $n=0;
    $Tenloai = $_GET['Tenloai'];
    $Tenloai = trim($Tenloai);
    $Tenloai1 = mb_strtolower($Tenloai, "utf8");
    $sql = "select TenLoaiHang from LoaiHangHoa";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query) != 0){
  //    $row = mysqli_fetch_array($query);
      while ($row = mysqli_fetch_array($query)) {
        if($Tenloai1 == mb_strtolower($row['TenLoaiHang'], "utf8")){
          echo("Giá trị đã tồn tại!");
          $n = "1";
          die();
        }
      }
    }

        if($n != "1"){
          $Tenloai =  ucfirst($Tenloai1);
          $sql ="insert into LoaiHangHoa(TenLoaiHang) value('$Tenloai')";
        //  mysqli_query($conn, $sql);
          if(mysqli_query($conn, $sql))
              echo("Thêm thành công!");
          else
              echo("Lỗi hệ thống");

        }
  }else{
    echo "Không bắt được dữ liệu!";
  }


 ?>
