<?php
if(isset($_GET['action'])){
  $temp = $_GET['action'];
}
else {
  $temp='';
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <div class="fluid-container">
      <?php
          include("Header_nav.php");
       ?>
  <div class="Noidung">
    <?php
   switch ($temp) {
     case 'quanlyhh':
       // code...
       include ("QuanlyHH.php");
       break;
     case 'quanlyloai':
       include ("QuanlyLoai.php");
       break;
    case 'quanlynhanvien':
      include ("QuanlyNV.php");
      break;
    case 'qlgiohang':
      include("Duyetgiohang.php");
      break;
     default:
       // code...

       break;
   }
    ?>
  </div>

</div>
  </body>
</html>
