<?php
include_once 'Ketnoi.php';

$hoten = $_POST['hoten'];
$tencty = $_POST['tencty'];
$sdt = $_POST['sdt'];
$sofax =$_POST['sofax'] ;
$matkhau = $_POST['matkhau'];
$matkhau = md5($matkhau);
//  kiem tra sdt co ton tai chua
$sql = "select SoDienThoai from KhachHang";
$query = mysqli_query($conn,$sql);
if(mysqli_num_rows($query) != 0){
//    $row = mysqli_fetch_array($query);
  while ($row = mysqli_fetch_array($query)) {
    if($row['SoDienThoai'] == $sdt){
      echo("Số điện thoại đã được đăng ký!");
      die();
    }
  }
}

$sql = "insert into KhachHang(HoTenKH,TenCongTy,SoDienThoai,SoFax,Passwd)
          values('$hoten','$tencty','$sdt','$sofax','$matkhau')";
  if(mysqli_query($conn,$sql)){
    echo("Thành công!");
  }else{
    echo("Thất bại!");
  }
 ?>
