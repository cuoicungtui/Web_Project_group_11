create database Web_Hahalolo

use Web_Hahalolo
Create table QL_May_Bay(
	Ma_May_Bay char(7) Primary Key ,
	Ten_Hang_Bay varchar(25),
	SL_Ghe_L1 int,
	SL_Ghe_L2 int
)

Create table QL_Chuyen_Bay(
	Ma_Chuyen_Bay char(7) Primary Key,
	Ma_May_Bay char(7) Unique,
	Ngay_Di datetime,
	Ngay_Den Datetime,
	Diem_Khoi_Hanh Varchar(25),
	Diem_Den Varchar(25),
	foreign key (Ma_May_Bay) references QL_May_Bay(Ma_May_Bay)
)

Create table Ql_Khach_Hang(
	Ma_Khach_Hang Char(7) PrimaRy Key,
	Ten_Khach_Hang Varchar(25),
	Ma_Chuyen_Bay char(7),
	So_Ghe char(4),
	Loai_Ve Varchar(10),
	foreign key (Ma_Chuyen_Bay) references QL_Chuyen_bay(Ma_Chuyen_Bay)
)
Alter table QL_May_Bay
	ADD  Ten_May_Bay Varchar(25)




