<?php
include_once("Ketnoi.php");

 ?>
<head>
  <link rel="stylesheet" href="cssKH.css">
</head>
<div class="container">
  <h3>Đăng ký thành viên</h3>
  <div class="row">
    <div class="col-md-4">
      <form class="form-group" action="" method="post">
        <label for="hoten">Họ tên </label>
        <input type="text" name="hoten" id="hoten" value="" class="form-control" required>
        <label for="tencty">Tên công ty</label>
        <input type="text" name="tencty" value="" id="tencty" class="form-control">
        <label for="sdt">Số điện thoại</label>
        <input type="text" name="sdt" id="sdt" value="" class="form-control" required pattern="[0]?[0-9]{10,11}">
        <label for="sofax">Số fax</label>
        <input type="text" name="sofax" id="sofax" value="" class="form-control">
        <label for="matkhau">Mật khẩu</label>
        <input type="password" name="matkhau" id="matkhau" value="" class="form-control" required>
        <label for="xc_matkhau">Xác nhận mật khẩu</label>
        <input type="password" name="xc_matkhau" id="xc_matkhau" value="" class="form-control" required>
        <br>
        <button type="button" class="btn" name="button" id="dangky">Đăng ký</button>
        <a href="index.php?=trangchu" class="btn">Về trang chủ</a>
      </form>
    </div>

  </div>

</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#dangky').click(function(){
      var hoten = $.trim($('#hoten').val());
      var tencty = $.trim($('#tencty').val());
      var sdt = $.trim($('#sdt').val());
      var sofax = $.trim($('#sofax').val());
      var matkhau = $.trim($('#matkhau').val());
      var xc_matkhau = $.trim($('#xc_matkhau').val());
      if(matkhau != xc_matkhau){
        $('#matkhau').css('border-color','red');
        $('#xc_matkhau').css('border-color','red');
      }else{
        $.post("Xulydangky.php",{hoten:hoten,tencty,tencty,sdt:sdt,sofax:sofax,matkhau:matkhau},
                              function(thongbao){
            alert(thongbao);
            if(thongbao == "Thành công!"){
              location.href = "index.phpaction=dangnhap";
            }
          });
      }
    });
  })
</script>
