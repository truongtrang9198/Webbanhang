<?php
  if(isset($_GET['id'])){
    $maloai = $_GET['id'];
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
     //  xoa hang hoa
     //  xoa loai hang hoa
   window.onload = function(){

       var maloai = <?php echo $maloai; ?>;
       var Xacnhan = confirm("Bạn muốn loại hàng hóa ra khỏi hệ thống?");
       if(Xacnhan){
         $.get("Xulyxoaloai.php",{maloai:maloai},function(thongbao){
             alert(thongbao);
         });
       }
       location.href= "index.php?action=quanlyloai";
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
