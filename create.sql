create database if not exists Assignmentdb;

go

use Assignemntdb;

go

Create TABLE Orders(
firstname varchar(50) not null primary key,
lastname varchar(50) not null,
noOftyres int not null,
amount int not null);

go

INSERT INTO Orders(firstname, lastname,noOfTyres)
values('john','smith',2, 220);

go