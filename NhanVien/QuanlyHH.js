//  them hang hoa
$(document).ready(function(){
  $('#btn-themhang').click(function(){
    var tenhang = $('#tenhang').val();
    var maloai = $('#loaihang').val();
    var quycach = $('#quycach').val();
    var soluong =$('#soluong').val();
    var gia =$('#gia').val();
    $.post("XulythemHH.php",{tenhang:tenhang,maloai:maloai,quycach:quycach,soluong:soluong,gia:gia},function(data){
      alert(data);
      location.reload();
    })
  });
  //  xoa hang hoa
  $('#XoaHH').click(function(){
    var mahang = $('#XoaHH').val();
    var xacnhan = confirm("Bạn muốn xóa sản phẩm ra khỏi kho?");
    if(xacnhan){
      $.post("XulyxoaHH.php",{mahang:mahang},function(data){
        alert(data);
        location.reload();
      })
    }
  })

  // cap nhat hang hoa
  $('#btn-capnhat').click(function(){
    var tenhang = $('#tenhang').val();
    var maloai = $('#loaihang').val();
    var quycach = $('#quycach').val();
    var soluong =$('#soluong').val();
    var gia =$('#gia').val();
    $.post("XulycapnhatHH.php",{tenhang:tenhang,maloai:maloai,quycach:quycach,soluong:soluong,gia:gia},function(data){
      alert(data);
      location.reload();
    });
    // cap nhat anh
    $('#Taianh').click(function(){
        // var formData = new FormData($('#form-anh')[0]);
        if($('#hinhanh').val() !=''){
          var hinhanh = $("#hinhanh").val();
          var hinhanh1= hinhanh.slice(hinhanh.indexOf('.')+1,hinhanh.length);
          var hinhanh1 = hinhanh1.toUpperCase();
          if(hinhanh1 == 'JPG' || hinhanh1 =='PNG'){
            var mahang = $('#mahang').attr("name");
            var fd = new FormData();
            fd.append('hinhanh',$('#hinhanh')[0].files['0']);
            fd.append('mahang','<?php echo $mahang; ?>');
            $.ajax({
              url: "Taianhlen.php",
              method: 'POST',
              dataType: 'text',
              processData:false,
              contentType: false,
              data: fd,
              success: function(re){
                  //
                  alert(re);
                  $('#hinhanh').val('');
              }
            });
          }else{
            alert("Ảnh không đúng định dạng!");
          }

        }else{
          alert("Không có file!");
        }

    });

  });





})
