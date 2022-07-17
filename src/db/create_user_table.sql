-- CREATE TABLE STATEMENTS
create table users(
	email varchar(128) not null primary key,
	name varchar(128) not null,
	phone varchar(128) not null,
	password varchar(128) not null unique
)



-- INSERT STATEMENTS