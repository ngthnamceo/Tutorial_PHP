Create database Exercise
•	Create table NHANVIEN(
		HONV int IDENTITY,
		TENLOT varchar(30),
		PHAI varchar(5),
		LUONG int NOT NULL,
		MANV varchar (50) NOT NULL,
		NGSINH datetime NOT NULL,
		DIACHI varchar NOT NULL,
		PHG varchar (5) NOT NULL
)
Insert into NHANVIEN Values (‘Đinh’,’Lê’,’Tiên’,’Nam’,’4000’,’123456789’,’01/09/1965’,’Nguyễn Trãi, Q5’,’1’),
(‘Nguyễn’,’Thị’,’Loan’,’Nữ’,’2500’,’3334455’,’12/08/1995’,’Nguyễn Huệ,Q1’,’5’)
(‘Nguyễn’,’Lan’,’Anh’,’Nữ’,’4300’,’666884444’,’15/09/1962’,’Lê Lợi,Q1’,’5’)
(‘Trần’,’Thanh’,’Tâm’,’Nam’,’3800’,’453453453’,’31/07/1972’,’Trần Não, Q2’,’2’);

•	 Create table Dean (
TENDA int NOT NULL,
MADA varchar (50) NOT NULL,
DDIEM_DA varchar NOT NULL,
PHG varchar (5) NOT NULL
)
	Insert into DEAN Values (‘Sản phẩm X’,’1’,’Quy Nhơn’,’5’),
				(‘Sản Phẩm Y’,’2’,’Nha Trang’,’5’),
				(Sản phẩm Z’,’3’,’TP HCM’,’5’),
				(‘Sản phẩm’,’10’,’Bình Dương’,’4’);
•	Create table PHONGBAN (
PHG varchar (5) NOT NULL,
TENPHG int (50)
)
		Insert into PHONGBAN Values (‘1,’Nhân sự’),(‘2,’Kế hoạch’),(‘3’,’Kinh doanh’),(‘4’,’Maketing’),(‘5’,’Kế toán’);
•	Create table PHANCONG (
		MANV varvhar(50) NOT NULL,
		MADA varchar(5) NOT NULL,
		SOGIO varchar NOT NULL
)
Insert into PHANCONG Values (‘123456798’,’1’,’32.0’),(‘123456789’,’2’,’8.0’),(‘666884444’,’3’,’40.0’),(‘453453453’,’1’,’20.0’);

•	Hiện thị thông tin Nhân viên
SELECT * FROM NHANVIEN

•	Hiện thị thông tin phòng số 5
SELECT * FROM NHANVIEN WHERE PHG = 5

•	Hiển thị mã nhân viên, họ nhân viên, tên lót và tên nhân viên của những nhân viên ở phòng số 5 và có lương >= 3000
SELECT * FROM NHANVIEN WHERE PHG = 5 AND LUONG >= 3000


•	Hiển thị mã nhân viên, tên nhân viên của những nhân viên có lương từ 2000 đến 8000
SELECT MANV, TENNV * FROM NHANVIEN WHERE LUONG >=2000 AND LUONG <=8000


•	Hiển thị thông tin của những nhân viên ở địa chỉ có tên đường là Nguyễn

SELECT * FROM NHANVIEN WHERE DIACHI like N’Nguyyễn%’

•	Cho biết số lượng nhân viên
SELECT COUNT(*)
FROM NHANVIEN
WHERE TENNV
•	Cho biết số lượng nhân viên trong từng phòng ban



 
•	Hiển thị thông tin về mã nhân viên, tên nhân viên và tên phòng ban ở phòng kế toán
SELECT MANV, TENNV, TENPHG * FROM PHONGBAN WHERE 



