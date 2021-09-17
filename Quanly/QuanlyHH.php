<?php
    include("Ketnoi.php");
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
       .btn{
         background-color: #7A8B8B;
         color:white;
       }
       #form-search >input{
         width: 300px !important;
         border-bottom: 1px solid;
         border-color: #7A8B8B;

       }

     </style>
     <script src="QuanlyHH.js"></script>
   </head>
   <body>
 <div class="container-fluid">
<h3>QUẢN LÝ HÀNG HÓA</h3>

  <div class="col-md-4">
    <form class="form-inline" id="form-search" action="#" method="get">
            <input type="text" class="form-control" id="Timkiem" name="" value="" placeholder="Search ...">
            <button type="submit" class="btn" name="button"><i class="fas fa-search"></i> </button>
    </form>
  </div>
<!-- Danh sach hang hoa -->
<table class="table table-striped table-hover" id="danhsachhanghoa">
    <thead>
      <tr>
        <th>STT</th>
        <th>Mã hàng</th>
        <th>Loại hàng</th>
        <th>Tên sản phẩm</th>
        <th>Quy cách</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th></th>
        <th></th>

      </tr>
    </thead>
    <tbody>
        <?php
        $sql ="call DanhsachHH();";
        $query = mysqli_query($conn,$sql);
        $n = 0;
        while($row=mysqli_fetch_array($query)){
         ?>
         <tr>
        <td><?php echo $n; ?></td>
        <td><?php echo $row['MSHH']; ?></td>
        <td><?php echo $row['TenLoaiHang']; ?></td>
        <td> <?php echo $row['TenHH']; ?></td>
        <td> <?php echo $row['QuyCach']; ?></td>
        <td> <?php echo $row['Gia']; ?></td>
        <td> <?php echo $row['SoLuongHang']; ?></td>
        <td> <a href="SuaHH.php?id=<?php echo $row['MSHH']; ?>" class="btn"><i class="fas fa-edit"></i></button> </td>
        <td> <button class="btn" value="<?php echo $row['MSHH']; ?>" id="XoaHH">
          <i class="fas fa-trash-alt"></i></button> </td>
        <?php $n++;
      }
    ?>
      </tr>
    </tbody>
</table>
<button type="button" class="btn text-light" data-toggle="collapse" data-target="#form-themhang"  name="button">Thêm mặt hàng</button>
<div class="collapse" id="form-themhang">
  <hr>
  <form class="inline" action="index.html" method="post">
    <label for="tenhang">Tên sản phẩm</label>
    <input type="text" name="tenhang" id="tenhang" value="" required>
    <label for="">Chọn loại hàng: </label>
    <select class="select" name="" id="loaihang">
    <?php
    include("../Ketnoi.php");
    $sql = "select * from LoaiHangHoa";
    $query = mysqli_query($conn, $sql);
      if (mysqli_num_rows($query) != 0) {
          while ($row = mysqli_fetch_array($query)) {
            ?>
              <option value="<?php echo $row['MaLoaiHang'];?>"> <?php echo $row['TenLoaiHang']; ?></option>

            <?php
          }
        }else{
          echo "Khong truy van duoc";
        }
     ?>
       </select>
       <label for="gia">Giá</label>
       <input type="text" name="gia" id="gia" value="" required>
       <label for="soluong">Số lượng</label>
       <input type="text" name="soluong" id="soluong" value="" required>
       <label for="quycach">Quy cách</label>
       <input type="text" name="quycach" id="quycach" value=""required >
       <button type="button" class="btn" name="button" id="btn-themhang">Thêm</button>
       <button type="button" class="btn" name="button" data-toggle="collapse" data-target="#form-themhang">Hủy</button>
  </form>

</div>
 </div>
</body>
</html>
