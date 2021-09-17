<?php
    include("Ketnoi.php");
      $mahang = $_POST['mahang'];
      $hinhanh = $_FILES['hinhanh']['name'];
      $tmp_name = $_FILES['hinhanh']['tmp_name'];
      $path="HinhAnh/";
      move_uploaded_file($tmp_name,$path.$hinhanh);
      $img_url = $path.$hinhanh;
      $sql = "insert into HinhHangHoa(MSHH,TenHinh) values('$mahang','$img_url')";
      if(mysqli_query($conn,$sql)){
        echo("Tải ảnh thành công");
        
      }else{
        echo ("Thất bại");
      }

 ?>
