--login

mysql -h localhost -u root -p

--creating databse
create database ;

	--showing databases
	show databasses;

	--using databases
	use m_php;

	--DDL
	--Create,alter


	--DML
	--Insert ,update ,delete


	--QML
	--select

	--creating a table

create table students(
id int(10) not null,
name varchar(255) not null,
email varchar(255) not null,
status smallint(4) not null default '1',
gender char(6) not null default 'other'
);

alter table students add column date_of_birth date null after gender;
