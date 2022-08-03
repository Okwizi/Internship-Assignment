create table Doctor(ID varchar(255) primary key not null, First_Name varchar(255), Last_Name varchar(255), Hospital varchar(255));
insert into Doctor(ID,First_Name,Last_Name,Hospital) values ('12335', 'Maria', 'Wachira', 'Sali International Hospital');
insert into Doctor(ID,First_Name,Last_Name,Hospital) values ('23556', 'Joel', 'Boey', 'Dignity Health');
insert into Doctor(ID,First_Name,Last_Name,Hospital) values ('2040545', 'Ian', 'Dela', 'Kenyatta Hospital');
insert into Doctor(ID,First_Name,Last_Name,Hospital) values ('677543', 'Daisy', 'Makawawo', 'Sali International Hospital');
select * from doctor;