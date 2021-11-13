
  $(document).ready(function(){
// javascript phần đăng ký và đăng nhập hệ thống --------------------------------------------------------------
// Đăng nhập vào hệ thống
    $('#form_dn').submit(function(e){
        e.preventDefault();
        var sdt = $('#sdt').val();
        var pwd = $('#matkhau').val();
      //alert(sdt);

        $.post("KiemtraDN.php",{sdt:sdt,pwd:pwd},function(data){
          if(data =="True"){
            $('#form_dn').unbind('submit');
            $('#submit').click();
          }
           else {
               $('#Thongbaodangnhap').html(data);
           }
        });
    });

// Đăng ký vào hệ thống
$('#form_dangky').submit(function(e){
  e.preventDefault();
  var hoten = $.trim($('#hoten').val());
  var tencty = $.trim($('#tencty').val());
  var sdt = $.trim($('#sdt_dk').val());
  var sofax = $.trim($('#sofax').val());
  var matkhau = $.trim($('#matkhau_dk').val());
  var xc_matkhau = $.trim($('#xc_matkhau').val());
  if(matkhau != xc_matkhau){
    $('#matkhau_dk').css('border-color','red');
    $('#xc_matkhau').css('border-color','red');
  }else{
    $.post("Xulydangky.php",{hoten:hoten,tencty,tencty,sdt:sdt,sofax:sofax,matkhau:matkhau},
                          function(thongbao){
        alert(thongbao);
        if(thongbao == "Thành công!"){
          location.href = "index.php?action=trangchu";
        }
      });
  }
});

 
  });
