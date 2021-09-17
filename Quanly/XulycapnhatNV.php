<?php
include("Ketnoi.php");
  $manv = $_POST['manv'];
  $hoten = $_POST['hoten'];
  $diachi = $_POST['diachi'];
  $sdt = $_POST['sdt'];
  $chucvu = $_POST['chucvu'];
  $n=0;
  $sql = "select SDT from NhanVien where not MSNV='$manv'";
  $query = mysqli_query($conn,$sql);
  if(mysqli_num_rows($query)==0){
      $n=0;
  }else{
    while($row=mysqli_fetch_array($query)){
      if($sdt==$row['SDT']){
        echo("Số điện thoại đã tồn tại!");
        $n=1;
        die();
      }
    }

  }
  if($n==0){
    $sql = "update NhanVien set HoTenNV='$hoten',ChucVu='$chucvu',DiaChi='$diachi',SDT='$sdt'";
    if(mysqli_query($conn,$sql)){
      echo "Cập nhật thành công!";
      
  else
    }else{
      echo "Thất bại!";
    }
  }





 ?>
