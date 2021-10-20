
  $(document).ready(function(){
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




  });
