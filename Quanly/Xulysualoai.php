  <?php
  include("../Ketnoi.php");
  $n = "0";
  $Maloai = $_GET['maloai'];
  $Tenloai = $_GET['tenloai'];

//    $tenloai = rtrim($tenloai, 'end');
  $tenloai1 = mb_strtolower($Tenloai, "utf8");
  $sql = "select TenLoaiHang from LoaiHangHoa where not MaLoaiHang = $Maloai";
  $query = mysqli_query($conn,$sql);
  if(mysqli_num_rows($query) != 0){
//    $row = mysqli_fetch_array($query);
    while ($row = mysqli_fetch_array($query)) {
      if($tenloai1 == mb_strtolower($row['TenLoaiHang'], "utf8")){
        echo("Tên loại hàng đã tồn tại!");
        $n = "1";
        die();
      }
    }
  }else {
      $n = "0";
  }
  if($n != "1"){
    $Tenloai =  ucfirst($tenloai1);
    $sql ="update LoaiHangHoa set TenLoaiHang = '$Tenloai' where MaLoaiHang = '$Maloai'";
  //  mysqli_query($conn, $sql);
    if(mysqli_query($conn, $sql))
        echo("Thành công!");
    else
        echo("Lỗi hệ thống");

  }


 ?>
