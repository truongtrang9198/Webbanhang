<?php
  if(isset($_GET['id'])){
    $mahh = $_GET['id'];
  }else{
    $mahh='';
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
     window.onload=function(){
       var mahang = <?php echo $mahh; ?>;
       var xacnhan = confirm("Bạn muốn xóa sản phẩm ra khỏi kho?");
       if(xacnhan){
         $.post("XulyxoaHH.php",{mahang:mahang},function(data){
           alert(data);
           // $(location).href('index.php?action=quanlyhh');

         })
       }
       location.href = 'index.php?action=quanlyhh';
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
