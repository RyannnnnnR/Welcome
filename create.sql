create database if not exists Assignmentdb;

go

use Assignmentdb;

go

Create TABLE if not exists Orders(
`firstname` varchar(50) not null primary key,
`lastname` varchar(50) not null,
`noOftyres` int not null,
`amount` int not null);

go

INSERT INTO Orders(firstname, lastname,noOfTyres, amount)
values('john','smith',2, 220);

go

CREATE USER 'abc'@'localhost' IDENTIFIED BY 'abc';

go

GRANT ALL PRIVILEGES ON Assignmentdb.* TO 'abc'@'localhost';

go