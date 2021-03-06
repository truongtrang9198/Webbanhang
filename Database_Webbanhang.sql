create database Webbanhang;
use Webbanhang;
-- tao lai database Quanlydathang
create database Quanlydathang;
use Quanlydathang;
 
create table Nhanvien(
	MSNV int primary key auto_increment,
    HoTenNV varchar(50) not null,
    ChucVu varchar(50),
    DiaChi varchar(100),
    SDT char(10),
    MatKhau varchar(32)
);
drop table NhanVien;

create table KhachHang (
	MSKH int primary key auto_increment,
    HoTenKH varchar(50) not null,
    TenCongTy varchar(50),
    SoDienThoai char(10),
    SoFax varchar(15),
    Passwd varchar(32)
);

create table DiaChiKH (
	MaDC char(5) not null primary key,
    DiaChi varchar(50) not null,
    MSKH int,
    foreign key(MSKH) references KhachHang(MSKH)
);
create table LoaiHangHoa(
	MaLoaiHang int primary key auto_increment,
    TenLoaiHang varchar(50)
);

create table HangHoa (
	MSHH int primary key auto_increment,
    TenHH varchar(50) not null,
    QuyCach varchar(30),
    Gia double not null,
    SoLuongHang int,
    MaLoaiHang int,
    foreign key(MaLoaiHang) references LoaiHangHoa(MaLoaiHang) on delete no action
);
drop table Hanghoa;

create table HinhHangHoa (
	MaHinh int primary key auto_increment,
    TenHinh varchar(50),
    MSHH int,
    foreign key(MSHH) references HangHoa(MSHH) on delete cascade
);

create table DatHang (
	SoDonDH int primary key auto_increment,
    MSKH int,
    MSNV int,
    NgayDH datetime,
    NgayGH date,
    TrangThaiDH varchar(10),
	constraint FK_Khachhang foreign key(MSKH) references KhachHang(MSKH) on delete no action,
    constraint FK_Nhanvien foreign key(MSNV) references NhanVien(MSNV) on delete no action
);
drop table DatHang;
create table ChiTietDatHang(
	SoDonDH int,
    MSHH int,
    SoLuong int,
    GiaDatHang double,
    GiamGia double,
    primary key(SoDonDH,MSHH)
);

