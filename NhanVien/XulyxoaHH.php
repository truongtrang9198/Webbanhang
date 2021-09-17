<?php
  include("../Ketnoi.php");
  if(isset($_POST['mahang'])){
    $mahang = $_POST['mahang'];
      $sql = "delete from HangHoa where MSHH='$mahang'";
      if(mysqli_query($conn,$sql)){
        echo "Thành công!";
      }else{
        echo "Thất bại!";
      }
  }else {
    echo "khong bat duoc du lieu";
  }



 ?>
