<?php
    include("../Ketnoi.php");
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
       .btn{
         background-color: #7A8B8B;
       }
     </style>
   </head>
   <body>
 <div class="container-fluid">
<h3>QUẢN LÝ LOẠI HÀNG HÓA</h3>
<form class="form-inline" action="#" method="get">
        <input type="text" class="form-control mr-sm-2" id="Timkiem" name="" value="" placeholder="Search ...">
        <button type="submit" class="btn" name="button"><i class="fas fa-search"></i> </button>
</form>
<table class="table table-striped table-hover" id="danhsachloai">
    <thead>
      <tr>
        <th>STT</th>
        <th>Mã loại</th>
        <th>Tên Loại</th>
        <th> </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
        $sql ="select * from LoaiHangHoa LIMIT 6";
        $query = mysqli_query($conn,$sql);
        $n = 0;
        while($row =mysqli_fetch_array($query)){
         ?>
        <td><?php echo $n; ?></td>
        <td><?php echo $row['MaLoaiHang']; ?></td>
        <td><?php echo $row['TenLoaiHang']; ?></td>
        <td> <a href="#"> <i class="fas fa-edit"></i></a> </td>
        <td><a href="#"><i class="fas fa-trash"></i></a> </td>
        <?php $n++;
      }
    ?>
      </tr>
    </tbody>
</table>
<form class="form-inline" action="index.html" method="post">
  <input type="text" name="" value="" class="form-control" placeholder="Nhập tên loại hàng" id="Tenloai">
  <button type="button" name="button" class="btn" id="Them">Thêm</button>
</form>
 </div>
</body>
</html>
<script type="text/javascript">
  $.document.ready(function(){
    $('#Them').click(function(){
      var Tenloai = $('#Tenloai').val();
      $.get("Xulythemloai.php",{Tenloai:Tenloai},function(data){
        alert(data);
      })
    })


  })
</script>
