<?php
  if(isset($_GET['id'])){
    $manv = $_GET['id'];
  }else{
    $maloai='';
  }

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript">
     // xoa nhan NhanVien
     window.onload=function(){
       // alert("click r");
        var manv = <?php echo $manv; ?>;
        var xacnhan = confirm("Xóa nhân viên ra khỏi hệ thống?");
        if(xacnhan){
          $.get("XulyxoaNV.php",{manv:manv},function(thongbao){
            alert(thongbao);
          });
        }
        location.href = 'index.php?action=quanlynhanvien';
     };
     </script>
     <style media="screen">
       #loading{
         margin-left: 550px;
         margin-top: 200px;
       }
       body{
         background-color:#FFFFFF;
       }
     </style>
   </head>
   <body>
     <img src="Hinhanh/Bean_Eater-1s-200px.gif" alt="" id="loading">
   </body>
 </html>
