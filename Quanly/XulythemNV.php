<?php
include("Ketnoi.php");
  $hoten = $_POST['hoten'];
  $diachi = $_POST['diachi'];
  $sdt = $_POST['sdt'];
  $chucvu = $_POST['chucvu'];
  $matkhau = md5("abc123");
  $n=0;
  $sql = "select SDT from NhanVien";
  $query = mysqli_query($conn,$sql);
  if(mysqli_num_rows($query) !=0){
    while($row=mysqli_fetch_array($query)){
      if($sdt==$row['SDT']){
        echo("Số điện thoại đã tồn tại!");
        $n=1;
        die();
      }
    }
  }
  if($n==0){
    $sql = "insert into NhanVien(HoTenNV,ChucVu,DiaChi,SDT,MatKhau) values('$hoten','$chucvu','$diachi','$sdt','$matkhau')";
    if(mysqli_query($conn,$sql)){
      echo "Thêm nhân viên thành công!";
    }else{
      echo "Thất bại!";
    }
  }





 ?>
