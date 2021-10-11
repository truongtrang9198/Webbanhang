use Webbanhang;
-- danh sach hang

delimiter /
	create procedure DanhsachHH ()
    begin	
		select * from HangHoa 
        inner join LoaiHangHoa on HangHoa.MaLoaiHang = LoaiHangHoa.MaLoaiHang;
    end /
delimiter ;

drop procedure DanhsachHH;