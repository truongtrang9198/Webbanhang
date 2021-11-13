<?php
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
    include_once("Ketnoi.php");
    $makhach = $_SESSION['MSKH'];
    $maso =  rand(0,1000);
    if(isset($_POST['madc'])){
      $madc = $_POST['madc'];
      $sql = "call Dathang('$makhach','$maso','$madc')";
      if(mysqli_query($conn, $sql)){
        header("Location:index.php?action=thanhcong");
      }else{
        echo "<p align='center'>Lỗi hệ thống!
              <a href='index.php'>Trang chủ</a>
        <p>";

      }
    }else{
      echo "Lỗi hệ thống!";
    }

 ?>
