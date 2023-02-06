
//step 1 connect to mysql shell using username: root and password:

	mysql.exe -uroot -p

// step 2 how to create a database

	create database users_db;

// step 3 you need to use the database to created table
	
	use users_db;

// step 4 creating table

	create table users (
		id integer(11),
		name varchar(191));


// step 5 inserting data in table
insert into users(id,name) values (1,'dinah');	