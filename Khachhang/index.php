<?php
  include("Header_nav.php");
  if (isset($_GET['action'])){
    $yc = $_GET['action'];
  }else{
    $yc = 'trangchu';
  }

?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
      <?php
          switch ($yc){
            case 'trangchu':
                include 'Toanbosp.php';
                break;
            case 'thongtin':
                include 'Thongtin.php';
                break;
            case 'dangky':
                include 'Dangky.php';
                break;
            case 'giohang_tv':
                include 'Giohang_tv.php';
                break;
            case 'thanhtoan':
                include 'Thanhtoan.php';
                break;
            case 'xulydathang':
                include 'Xulydathang.php';
                break;
            case 'thanhcong':
                include 'Thanhcong.php';
                break;
            case 'thanhtoan':
                include 'Thanhtoan.php';
                break;
            default:
                include 'Toanbosp.php';

          }

       ?>
       <div class="" id="footer">
         <?php
              include ('Footer.php');
          ?>
       </div>
   </body>
 </html>
