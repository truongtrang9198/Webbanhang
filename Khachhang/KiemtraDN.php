<?php

  include("Ketnoi.php");
    $sdt = trim(addslashes($_POST['sdt']));
    $pwd = trim(addslashes($_POST['pwd']));
    $pwd = md5($pwd);

    $sql = "select * from KhachHang where SoDienThoai = '$sdt'";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query) > 0){
      $row = mysqli_fetch_array($query);
      if($pwd != $row['Passwd']){
        echo("Mật khẩu không chính xác!");
        die();
      }else{
        echo "True";
      }

}else{
      echo("Tên đăng nhập không tồn tại!");
      die();
      // header("Location:Nhanvien.php?d=trangchu");
}
 ?>
