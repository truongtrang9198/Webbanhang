<?php
include("Header_nav.php");
  if(isset($_GET['id'])){
    $ma = $_GET['id'];

  }

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
     .sualoai{
       margin: auto;
     }
     .input-group{
       width: 500px !important;
       margin: auto;
       border: 2px solid;
       border-color: #7A8B8B;
     }

     .btn{
            background-color: #7A8B8B;
            color:white;
            width: 80px !important;
       }
     </style>

   </head>
   <body>
     <div class="sualoai">
         <div class="input-group">
            <input type="text" name="" id="tenloais" value="" class="form-control" placeholder="Nhập tên loại mới">
            <div class="input-group-deppend">
              <button type="button" class="btn" name="button" id="btn-sualoai">Sửa</button>

            </div>
         </div>


     </div>

   </body>
 </html>
 <script type="text/javascript">
   $(document).ready(function(){
     $('#btn-sualoai').click(function(){
       var maloai = <?php echo $ma ?>;
       // alert(maloai);
       var tenloais = $.trim($('#tenloais').val());

       if(tenloais !=''){
         $.get('Xulysualoai.php',{maloai:maloai,tenloai:tenloais},function(tt){
           alert(tt);
           location.href = 'index.php?action=quanlyloai';
         });
       }

     });
   })
 </script>
